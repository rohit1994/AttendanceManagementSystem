<?php
/* ATTENDENCE VIEW
  *Author:KRIPA MARIYA
*/
include("connection.php");
session_start();
if(isset($_POST['submit']))
{
  $date=$_POST['date'];
  $course=$_POST['course'];
  $division=$_POST['division'];
  
  $sql1="select * from attendence where course='$course' and division='$division' ";
 // $result = $conn->query($sql);
  $result = $conn->query($sql1);
?>
  <center><h1>Attandance</h1></center>
<form>
<?php
echo "<table border='1px'>";
echo "<tr>";
echo "<th> Date </th>";
echo "<th> Course </th>";
echo "<th> Division </th>";
echo "<th> Name </th>";
echo "<th> Morning </th>";
echo "<th> Evening </th>";
echo "</tr>";
foreach($result as $row)
{
	//print_r($row);
echo "<br>";
echo "<tr>";
echo "<td>".$row['date']."</td>";
echo "<td>".$row['course']."</td>";
echo "<td>".$row['division']."</td>";
echo "<td>".$row['name']."</td>";
echo "<td>".$row['fn']."</td>";
echo "<td>".$row['an']."</td>";
?>
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
<a href="dashboard.php">Back</a>