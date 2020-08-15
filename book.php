<?php session_start();
      //Put session start at the beginning of the file
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center>
	<h2> Booking in <?PHP echo $_COOKIE["hotel"];?></h2>
	<form action="" method="post">
		Select the room type:<select name="book">
			<option >select...</option>
			<option value="Single bed room">Single bed room</option>
			<option value="Double bed room">Double bed room</option>
			<option value="Single bed room with A.C">Single bed room with A.C</option>
			<option value="Double bed room with A.C">Double bed room with A.C</option>
			<option value="VIP room">VIP room</option>
		</select><br><br>
		Booking Date:
		<input type="text" name="date"><br><br>
		<input type="submit" name="s1"></input>
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
if(isset($_COOKIE["name"]))
$n=mysqli_real_escape_string($conn, $_COOKIE["name"]);
if(isset($_COOKIE["hotel"]))
$h=mysqli_real_escape_string($conn, $_COOKIE["hotel"]);
$p=mysqli_real_escape_string($conn, $_COOKIE["rate"]);
$q="yes";
if(isset($_POST['book']) and $_POST['date'] and isset($_COOKIE["name"])){
$user=mysqli_real_escape_string($conn, $_POST['book']);
$date=mysqli_real_escape_string($conn, $_POST['date']);
$sql = "INSERT INTO orders VALUES ('$n','$h','$p','$user','$q','$date')";

if (mysqli_query($conn, $sql)) {
  echo "<center><a href=payment.php>click here to pay the amount </a></center>";
} 
}
else{
		echo "<center><h2>please login</h2></center>";

}
mysqli_close($conn);

?>
</body>
</html>