<?php session_start();
      //Put session start at the beginning of the file
?>
<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="abc.css">
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
$sql = "SELECT * FROM chennai where rate='10,000'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
   		echo "<center><h1 class=abc>" . $row["name"] . "</h1></center>";
            setcookie("hotel",$row["name"],time()+3600,"/","",0);
             setcookie("rate",$row["rate"],time()+3600,"/","",0);
   		echo "<center><table><tr><td width=200px height=200px><img src=".$row["img1"]."width=100%></td><td width=200px height=200px><img src=".$row["img2"]."width=100%></td><td width=200px height=200px><img src=".$row["img3"]."width=100%></td></tr>
   		<tr><td width=300px height=300px><img src=".$row["img4"]."width=100%></td><td width=200px height=200px><img src=".$row["img5"]."width=100%></td><td width=200px height=200px><img src=".$row["img6"]."width=100%></td></tr><tr><td width=200px height=200px><img src=".$row["img7"]."width=100%</td><td><a href= book.php><button style='background-color:green'>Book Now</button></a></td></tr></table></center>";
  } 
}
mysqli_close($conn);
?>
</body>
</html>