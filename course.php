<!DOCTYPE html>
<!-- COURSE PAGE
  *Author:KRIPA MARIYA
-->


<html>
<head>
<title>Leave Application</title>
<link rel="stylesheet"type="text/css"href="style.css">
</head>
<body>
<link rel="stylesheet"type="text/css"href="style.css">

</head>
<body class="t">

<h1><center>Course</center></h1>
<div align="center" class="batch">
<form name="register"  method="POST" onsubmit="return validate()" >
<script>
function validate()
	{ 
		var course_id=document.forms["register"]["course_id"].value;
		var name=document.forms["register"]["name"].value;
		var duration=document.forms["register"]["duration"].value;
		
		
		if(course_id=="")
		{
			alert("plse entr the course_id");
			document.forms["register"]["course_id"].focus();
			return false;
		}		
		else if(name=="")
		{
			alert("plse entr the name");
			document.forms["register"]["name"].focus();
			return false;
		}	
		else if(duration=="")
		{
			alert("plse select duration");
			document.forms["register"]["duration"].focus();
			return false;
		}

		
		else{
			
		
			return true;
	}
	}
</script>
course_id:<input type="text" name="course_id"></input><br><br>
name:<input type="text" name="name"></input><br><br>
duration:<select name="duration"><br>
<option value="1 month">1 month</option>
<option value="2 month">2 month</option>
<option value="3 month">3 month</option>
<option value="4 month">4 month</option>
<option value="others">others</option>

</select><br><br>
<input type="submit" value="submit" name="submit"></input>
</form>
</div>
<?php
include("connection.php");
session_start();
	
if(isset($_POST['submit']))
{
	$course_id=$_POST['course_id'];
$name=$_POST['name'];
$duration=$_POST['duration'];

	
	 echo "<h1>WELCOME $name </h1>";
	 if ((isset($_POST['course_id'])) and (isset($_POST['name']))and (isset($_POST['duration'])) ) 
	{
		$sql1="select * from course where duration='$duration'";
		$result = $conn->query($sql1);
		if($result->num_rows > 0) 
		{
		   echo "course already exist, try something else.";
        }
		else{
			
 $sql="insert into course(course_id,name,duration)values('$course_id','$name','$duration')";

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
?>
</body>
</html>
