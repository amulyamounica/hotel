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
$sql = "SELECT img1, name, rate,addr FROM hyderabad where rate='7,000'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
	echo "<table align=center>";
  while($row = mysqli_fetch_assoc($result)) {
   	echo "<tr><td width=200px height=200px><img src=".$row["img1"] ." width=100%></td><td width=200px height=200px><center>".$row["name"]."<bR><br><b>Rate:</b>".$row["rate"]."<br><br><b>Address:</b>".$row["addr"]."</center></td><td width=200px height=200px><center><a href=taj.php><button>explore</button></a></center></td></tr>";
   	}
   }
   	$sql = "SELECT img1, name, rate,addr FROM hyderabad where rate='5,719'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
	//echo "<table align=center>";
  while($row = mysqli_fetch_assoc($result)) {
   	  echo "<tr><td width=200px height=200px><img src=".$row["img1"] ."width=100% ></td><td width=200px height=200px><center>".$row["name"]."<bR><br><b>Rate:</b>".$row["rate"]."<br><br><b>Address:</b>".$row["addr"]."</center></td><td width=200px height=200px><center><a href=marriott.php><button>explore</button></a></center></td></tr>";
   	}
   }
   		$sql = "SELECT img1, name, rate,addr FROM hyderabad where rate='8,000'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
	//echo "<table align=center>";
  while($row = mysqli_fetch_assoc($result)) {
   	echo "<tr><td width=200px height=200px><img src=".$row["img1"] ." width=100%></td><td width=200px height=200px><center>".$row["name"]."<br><br><b>Rate:</b>".$row["rate"]."<br><br><b>Address:</b>".$row["addr"]."</center></td><td width=200px height=200px><center><a href=itc.php><button>explore</button></a></center></td></tr>";
   	}
  	echo "</table>";
  }
mysqli_close($conn);
?>
</body>
</html>