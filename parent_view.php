<!-- PARENT VIEW
*Author:ROHIT
-->

<html>
<head>
<link rel="stylesheet"type="text/css"href="style.css">
</head>
<body class="t">
<div align="center">
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
$sql = "SELECT * FROM users WHERE type='parent'";
$result=$conn->query($sql);?>
<center><h1>PARENT DETAILS</h1><center>
<form action="editp.php">
<?php
echo "<table border='1px'>";
echo "<tr>";
echo "<th>id</th>";
echo "<th> name </th>";
echo "<th> address </th>";
echo "<th> mobile </th>";
echo "<th> email </th>";

echo "<th> username</th>";
echo "<th> password</th>";
echo "<th> modify</th>";
echo "</tr>";
foreach($result as $row)
{
	//print_r($row);
echo "<br>";
echo "<tr>";
echo "<td>".$row["id"]."</td>";
echo "<td>".$row["name"]."</td>";
echo "<td>".$row["address"]."</td>";

echo "<td>".$row["mobile"]."</td>";
echo "<td>".$row["email"]."</td>";

echo "<td>".$row["username"]."</td>";
echo "<td>".$row["password"]."</td>";?>
 <td><a href='editp.php?id=<?=$row["id"]?>'>Edit</a>|
|<a href='deletep.php?id=<?=$row["id"]?>'>Delete</a></td>
</div>
<?php
echo "</tr>";
}
echo "</table>";
$conn->close();
?>
</form>
</body>
</html>
