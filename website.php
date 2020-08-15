<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
	<center>
<i class="fa fa-user-circle-o" style="font-size:36px;color: blue;"></i>
 <?php
 if(isset($_COOKIE["name"]))
echo "<h3>Hello ". $_COOKIE["name"]."</h3>";
else
echo "<h3> Hello</h3>";
header("refresh: 2"); 
?>
</center>

</body>
</html>
