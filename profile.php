<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "booking";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
if(isset($_COOKIE["name"])){
echo "<center><h3>user:".$_COOKIE["name"]."</center><br><br>";
$use=$_COOKIE["name"];
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {

if (mysqli_num_rows($result) > 0) {
  // output data of each row
	echo "<center><table border=1px><tr><td><b>S.no</b></td><td><b>name</b></td><td><b>email</b></td><td><b>username</b></td><td><b> phone no</b></td></tr>";
	$p=1;
  while($row = mysqli_fetch_assoc($result)) {
  	if($row['username']==$_COOKIE["name"]){
   		echo "<center><tr><td>".$p."</td><td>".$row["name"]."</td><td>".$row['email']."</td><td>".$row['username']."</td><td>".$row['phone']."</td></tr></center>";
   		$p=$p+1;
   	
  	}
   	}
   	echo "</table></center><br><br>";
   }
$sq = "SELECT * FROM orders";
$resul = mysqli_query($conn, $sq);

if (mysqli_num_rows($resul) > 0) {
  // output data of each row
	echo "<center><table border=1px><tr><td><b>S.no</b></td><td><b>Hotel</b></td><td><b>Amount</b></td><td><b>Date of booking</b></td><td><b>Room Type</b></td><td><b>Payment</b></td></tr>";
	$p=1;
  while($row = mysqli_fetch_assoc($resul)) {
  	if($row['user']==$_COOKIE["name"]){
   		echo "<center><tr><td>".$p."</td><td>".$row["hotel"]."</td><td>".$row['amount']."</td><td>".$row['date']."</td><td>".$row['type']."</td><td>".$row['paid']."</td></tr></center>";
   		$p=$p+1;
   	
  	}
   	}
   	echo "</table></center>";
  }
  else{
  	echo "<center><h3>no orders</h3></center>";
  }
}
}
else{
echo "<center><h3>Please Login <a href=login.php>click here to login</a>";}

mysqli_close($conn);

?>
</body>
</html>