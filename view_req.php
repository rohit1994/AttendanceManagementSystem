<!--LEAVE VIEW
*Author:ANIT,SURYA
-->

<html>
<head>
</head>
<body>
<link rel="stylesheet"type="text/css"href="style.css">
</head>
<body>
<link rel="stylesheet"type="text/css"href="style.css">

</head>
<body class="t">


<div align="center" class="batch">



<h1><center>Leave Request<hr></center></h1><br>
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
$sql = "SELECT * FROM leave_report ";
$result=$conn->query($sql);?>

<form action="edits.php">
<?php

echo "<table border='1px'>";
echo "<tr>";
echo "<th> date </th>";
echo "<th> stud_name </th>";
echo "<th> teacher </th>";
echo "<th> subject </th>";
echo "<th> content </th>";
echo "<th> Response </th>";

echo "</tr>";
foreach($result as $row)
{
	//print_r($row);
echo "<br>";
echo "<tr>";
echo "<td>".$row["date"]."</td>";
echo "<td>".$row["stud_name"]."</td>";
echo "<td>".$row["teacher"]."</td>";
echo "<td>".$row["subject"]."</td>";
echo "<td>".$row["content"]."</td>";

echo "<td><a href='accept.php'>Accept</a>|
|<a href='reject.php'>Reject</a></td>";
?>
 <?php
echo "</tr>";
}
echo "</table>";
$conn->close();
?><br>

</form>
</body>
</html>
