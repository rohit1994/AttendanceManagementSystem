
<!DOCTYPE html>
<!--  MARK ATTENDENCE
  *Author:ROHIT
-->
<html>
<head>
<title>mark_att</title>
<link rel="stylesheet"type="text/css"href="style.css">
</head>
<body class="t">

<h1><center>Course</center></h1>
<?php
include("connection.php");
session_start();
if(isset($_POST['submit']))
{
  $course=$_POST['course'];
  $division=$_POST['division'];
  $date=$_POST['date'];
  $sql1="select * from users where course='$course' and division='$division'";
  $sql="insert into attendence (date)values('$date')";
  $result = $conn->query($sql);
  $result = $conn->query($sql1);
?>
  <center><h1>Attandance</h1></center>
<form action="attendanceaction.php" method="get">
<?php
echo "<b>course:</b>".$course;
echo "<br>";
echo "<b>division:</b>".$division;
echo "<br>";
echo "<table border='1px'>";
echo "<tr>";
echo "<th> Date </th>";
echo "<th> Course</th>";
echo "<th> Division</th>";
echo "<th> Name</th>";
echo "<th> Morning</th>";
echo "<th> Evening </th>";
echo "<th> Add </th>";
echo "</tr>";
foreach($result as $row)
{
	//print_r($row);
echo "<br>";
echo "<tr>";
echo "<td>".$date."</td>";?>
<input type='hidden' name='date' value="<?php echo $date; ?>">

<td> <?php echo $row['course'];?></td>
<input type='hidden' name='course' value="<?php echo $course; ?>">
<td> <?php echo $row['division'];?></td>
<input type='hidden' name='division' value="<?php echo $division; ?>">
<td> <?php echo $row['name'];?></td>
<input type='hidden' name='name' value="<?php echo $row['name']; ?>">
<td><input type="radio" name="attendance[<?php echo $row['name']; ?>]" value="present">
 <input type="radio" name="attendance[<?php echo $row['name']; ?>]" value="absent"></td>
<td><input type="radio" name="attendance1[<?php echo $row['name']; ?>]" value="present">
<input type="radio" name="attendance1[<?php echo $row['name']; ?>]" value="absent"></td>
 <td><input type="submit"></td>
 <?php
echo "</tr>";
}
echo "</table>";

//$conn->close();
?><br>

<?php
}
?>
</form>
<a href="teacher_dashbord.php">Back</a>
</body>
</html>