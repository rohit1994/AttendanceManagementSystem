<?php

/* LEAVE REPORT VALIDATION
  *Author:ANIT ,SURYA
*/
include("connection.php");
session_start();

$d=$_POST['date'];
$f=$_POST['stud_name'];
$t=$_POST['teacher'];
$s=$_POST['subject'];
$c=$_POST['content'];


	
if(isset($_POST['submit']))
{
	
	 echo "<h1>WELCOME $f </h1>";
	 if ((isset($_POST['date']))and (isset($_POST['stud_name']))and (isset($_POST['teacher']))and (isset($_POST['subject'])) and (isset($_POST['content']))) 
	{
		$sql1="select * from leave_report where stud_name='$f'";
		$result = $conn->query($sql1);
		if($result->num_rows > 0) 
		{
		   echo "leave application error, try something else.";
        }
		else{
			
 $sql="insert into leave_report(date,stud_name,teacher,subject,content)values('$d','$f','$t','$s','$c')";

		}
		}
 if($conn->query($sql)==TRUE){
	 echo " <script>
	 window.location='dashboard.php';
	 </script>";
     }
	 else{
		 echo " <script>alert('registration error');
		 window.location='leave_application.php';
		 </script>";
	 }


}	
/*print_r($_REQUEST);*/
/*print_r($_POST);*/

?>