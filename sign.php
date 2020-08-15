<!DOCTYPE html>
<html>
<head>
	<title>signup</title>

</head>
<body>
	<center>
	<form action="" method="post" style="background-color:  #00e600;height: 500px;width: 400px;margin-top: 30px;border-radius: 10%">
		<br><center><h2>Signup Form</h2></center><br>
		<table>
			<tr><td>
	Name: </td><td><input type="text" name="name"><br><br></td></tr>
	<tr>
		<td>
	UserName:</td> <td><input type="text" name="user"><br><br></td></tr>
	<tr><td>Email:</td> <td><input type="text" name="email"><br><br></td></tr>
	<tr><td>Phone: </td><td><input type="text" name="phone"><br><br></td></tr>
	<tr><td>Password:</td><td> <input type="password" name="pass"><br><br></td>
	<tr><td>confirm password:</td> <td><input type="password" name="verify"><br><br></td>
	</tr></table>
	<input type="submit" name="btn"><br><br>
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
if(isset($_POST['name']))
$name=mysqli_real_escape_string($conn, $_POST['name']);
if(isset($_POST['user']))
$user=mysqli_real_escape_string($conn, $_POST['user']);
if(isset($_POST['email']))
$email=mysqli_real_escape_string($conn, $_POST['email']);
if(isset($_POST['phone']))
$phone=mysqli_real_escape_string($conn, $_POST['phone']);
if(isset($_POST['pass']))
$pass=mysqli_real_escape_string($conn, $_POST['pass']);
// Attempt insert query execution
if(isset($_POST['name']) and isset($_POST['user']) and isset($_POST['email']) and isset($_POST['phone']) and isset($_POST['pass'])){
$sql = "INSERT INTO users VALUES ('$name','$user','$email','$phone','$pass')";

if (mysqli_query($conn, $sql)) {
  echo "<center><h3>created successfully </center></h3> ";
     		setcookie("name",$user,time()+3600,"/","",0);
		header("Location: vizag.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
mysqli_close($conn);
?>
</body>
</html>