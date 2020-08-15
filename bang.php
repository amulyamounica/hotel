<!DOCTYPE html>
<html>
<head>
	<title>login</title>
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
$sql = "SELECT img1, name, rate,addr FROM bangalore where rate='6,000'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
	echo "<table align=center>";
  while($row = mysqli_fetch_assoc($result)) {
   	echo "<tr><td width=200px height=200px><img src=".$row["img1"] ." width=100%></td><td width=200px height=200px><center>".$row["name"]."<bR><br><b>Rate:</b>".$row["rate"]."<br><br><b>Address:</b>".$row["addr"]."</center></td><td width=200px height=200px><center><a href=sheraton.php><button>explore</button></a></center></td></tr>";
   	}
   }
   	$sql = "SELECT img1, name, rate,addr FROM bangalore where rate='1,789'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
	//echo "<table align=center>";
  while($row = mysqli_fetch_assoc($result)) {
   	echo "<tr><td width=200px height=200px><img src=".$row["img1"] ." width=100%></td><td width=200px height=200px><center>".$row["name"]."<br><br><b>Rate:</b>".$row["rate"]."<br><br><b>Address:</b>".$row["addr"]."</center></td><td width=200px height=200px><center><a href=treebo.php><button>explore</button></a></center></td></tr>";
   	}
   }
   		$sql = "SELECT img1, name, rate,addr FROM bangalore where rate='7,918'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
	//echo "<table align=center>";
  while($row = mysqli_fetch_assoc($result)) {
   	echo "<tr><td width=200px height=200px><img src=".$row["img1"] ." width=100%></td><td width=200px height=200px><center>".$row["name"]."<br><br><b>Rate:</b>".$row["rate"]."<br><br><b>Address:</b>".$row["addr"]."</center></td><td width=200px height=200px><center><a href=conrad.php><button>explore</button></a></center></td></tr>";
   	}
  	echo "</table>";
  }
mysqli_close($conn);
?>
</body>
</html>