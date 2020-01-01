<?php
$servername = "localhost";
$username = "root";
$password= "";
$dbname = "attendencemanagement";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


?>
<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet"type="text/css"href="style.css">
</head>
<body class="t">


<div align="center" class="teach">
<h1><center>leave request<hr></center></h1><br>
 <p> request sanctioned</p>
</div>
</body>
</html>