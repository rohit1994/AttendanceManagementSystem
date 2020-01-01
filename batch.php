<html>
<!-- Batch PAGE
  *Author:KRIPA MARIYA
-->

<head>
<link rel="stylesheet"type="text/css"href="style.css">
</head>

<body class="t">
<div align="center" class="batch">
<center><h1>Batch</h1></center>
<form name="register"  method="POST" onsubmit="return validate()" >
<script>
function validate()
	{ 
		var name=document.forms["register"]["name"].value;
		var start_date=document.forms["register"]["start_date"].value;
		var end_date=document.forms["register"]["end_date"].value;
		var course_id=document.forms["register"]["course_id"].value;
		var division_id=document.forms["register"]["division_id"].value;
		var teacher_id=document.forms["register"]["teacher_id"].value;
		
		
	    if(name=="")
		{
			alert("plse entr the name");
			document.forms["register"]["name"].focus();
			return false;
		}	
		else if(start_date=="")
		{
			alert("plse entr the start_date");
			document.forms["register"]["start_date"].focus();
			return false;
		}	
		else if(end_date=="")
		{
			alert("plse entr the end_date");
			document.forms["register"]["end_date"].focus();
			return false;
		}
		else if(course_id=="")
		{
			alert("plse entr the course_id");
			document.forms["register"]["course_id"].focus();
			return false;
		}
		else if(division_id=="")
		{
			alert("plse entr the division_id");
			document.forms["register"]["division_id"].focus();
			return false;
		}	
		else if(teacher_id=="")
		{
			alert("plse entr the teacher_id");
			document.forms["register"]["teacher_id"].focus();
			return false;
		}	
		else{
			
		
			return true;
	}
	}
</script>
name:<input type="text" name="name" class="frm"></input><br><br>
start_date:<input type="date" name="start_date"class="frm"></input><br><br>
end_date:<input type="date" name="end_date" class="frm" ></input><br><br>
course_id:<input type="text" name="course_id" class="frm"></input><br><br>
division_id:<input type="text" name="division_id" class="frm"></input><br><br>
teacher_id:<input type="text" name="teacher_id" class="frm"></input><br><br>
<input type="submit" value="submit" name="submit" class="frm-btn"></input>
</form >

<?php
include("connection.php");
session_start();
	
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
$start=$_POST['start_date'];
$end=$_POST['end_date'];
$course=$_POST['course_id'];
$division=$_POST['division_id'];
$teacher=$_POST['teacher_id'];

	
	 echo "<h1>WELCOME $name </h1>";
	 if ((isset($_POST['name'])) and (isset($_POST['start_date']))and (isset($_POST['end_date'])) and (isset($_POST['course_id']))and (isset($_POST['division_id'])) and (isset($_POST['teacher_id']))) 
	{
		$sql1="select * from batch where course_id='$course'";
		$result = $conn->query($sql1);
		if($result->num_rows > 0) 
		{
		   echo "Batch already exist, try something else.";
        }
		else{
			
 $sql="insert into batch(name,start_date,end_date,course_id,division_id,teacher_id)values('$name','$start','$end','$course','$division','$teacher')";

		}
		}
 if($conn->query($sql)==TRUE){
	 echo " <script>
	 window.location='dashboard.php';
	 </script>";
     }
	 else{
		 echo " <script>alert('registration error');
		 window.location='dashboard.php';
		 </script>";
	 }


}	
/*print_r($_REQUEST);*/
/*print_r($_POST);*/

?>
</body>
</html>