<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "booking";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM vizag";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<img src='". $row["img1"]. "''></img><br>";
      echo "<img src='". $row["img2"]. "''></img><br>";
    echo "<img src='". $row["img7"]. "''></img><br>";

  }
} else {
  echo "0 results";
}
$conn->close();
?>
</body>
</html>