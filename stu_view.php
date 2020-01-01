<!-- STUDENT VIEW
*Author:AMRITHA
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
$sql = "SELECT * FROM users WHERE type='stu'";
$result=$conn->query($sql);?>
<center><h1>Students Details</h1></center>
<form action="edits.php">
<?php

echo "<table border='1px'>";
echo "<tr>";
echo "<th> id </th>";
echo "<th> Name </th>";
echo "<th> D.O.B </th>";
echo "<th> email  </th>";
echo "<th> Mobile </th>";
echo "<th> Gender </th>";
echo "<th> Address </th>";
echo "<th> doj </th>";
echo "<th> doc  </th>";
echo "<th> Username </th>";
echo "<th> Password </th>";
echo "<th> Modify </th>";
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
echo "<td>".$row["doc"]."</td>";
echo "<td>".$row["username"]."</td>";
echo "<td>".$row["password"]."</td>";?>
<td><a href='edits.php?id=<?=$row["id"]?>'>Edit</a>|
|<a href='deletes.php?id=<?=$row["id"]?>'>Delete</a></td>
</div>
 <?php
echo "</tr>";
}
echo "</table>";
$conn->close();
?><br>

</form>
</body>
</html>
