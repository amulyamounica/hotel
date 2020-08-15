<!DOCTYPE html>
<html>
<head>
	<title>login</title>
</head>
<body>
	<center>
	<form action="login.php" method="post" style="background-color:  #00e600;height: 300px;width: 300px;margin-top: 100px;border-radius: 10%">
		<br><center><h2>Login Form</h2></center><br>
	UserName: <input type="text" name="user"><br><br>
	Password: <input type="password" name="pass"><br><br>
	<input type="submit" name="btn"><br><br>
	<a href="forgot.php" style="padding-left: 100px;">forgot password</a><br><br>if you are not registered?
	<a href="sign.php" >signup</a><br><br>
	</form>
	</center>
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
if(isset($_POST['pass']) and isset($_POST['user'])){
$user=mysqli_real_escape_string($conn, $_POST['user']);
$pass=mysqli_real_escape_string($conn, $_POST['pass']);
$sql = "SELECT username, password FROM users";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
   	if($user== $row["username"] and $pass==$row["password"]){
   		echo "<center><h1>successful</h1></center>";
		header("Location: vizag.php");
   		setcookie("name",$user,time()+3600,"/","",0);
   		
   	}
  }
   		echo "<center><h1>Please try again!!</h1></center>";
} 
}
mysqli_close($conn);

?>
</body>
</html>