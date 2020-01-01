<!-- Teacher VIEW
*Author:JIBI JOHNSON
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
$sql = "SELECT * FROM users WHERE type='teach'";
$result=$conn->query($sql);?>
<center><h1>STAFF DETAILS</h1><center>
<form action="editt.php">
<?php
echo "<table border='1px'>";
echo "<tr>";
echo "<th>id</th>";
echo "<th> name </th>";
echo "<th> dob </th>";
echo "<th> email </th>";
echo "<th> mobile </th>";
echo "<th> gender </th>";
echo "<th> address </th>";
echo "<th> doj</th>";
echo "<th> qualification</th>";
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
echo "<td>".$row["dob"]."</td>";
echo "<td>".$row["email"]."</td>";
echo "<td>".$row["mobile"]."</td>";
echo "<td>".$row["gender"]."</td>";
echo "<td>".$row["address"]."</td>";
echo "<td>".$row["doj"]."</td>";
echo "<td>".$row["qualification"]."</td>";
echo "<td>".$row["username"]."</td>";
echo "<td>".$row["password"]."</td>";?>
<td><a href='editt.php?id=<?=$row["id"]?>'>Edit</a>||<a href='deletet.php?id=<?=$row["id"]?>'>Delete</a></td>
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
