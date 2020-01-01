<!--SUBJECT FORM
*Author:BONY
-->

<!DOCTYPE html>
<html>
<head>
<title>Subject</title>
<body>
<h1>Subject</h1>
<form name="register" method="POST" onsubmit="return validate()" >
<script>
function validate()
	{ 
		
		
		
		var sub_name=document.forms["register"]["sub_name"].value;
		var course_id=document.forms["register"]["course_id"].value;
		
	  if(sub_name=="")
		{
			alert("plse entr the subject_name");
			document.forms["register"]["sub_name"].focus();
			return false;
		}			
		else if(course_id=="")
		{
			alert("plse entr the course_id");
			document.forms["register"]["course_id"].focus();
			return false;
		}	
		
		else{
			
		
			return true;
	}
	}
</script>


sub_name:<input type="text" name="sub_name"></input><br><br>
course_id:   <input type="text" name="course_id"></input><br><br>
<input type="submit" value="submit" name="submit"></input>
</form>
<?php
include("connection.php");
session_start();
	
if(isset($_POST['submit']))
{

	$sub_name=$_POST['sub_name'];
	$course_id=$_POST['course_id'];


	
	 echo "<h1>WELCOME </h1>";
	 if ((isset($_POST['sub_name'])) and (isset($_POST['course_id'])) ) 
	{
		$sql1="select * from subject where sub_name='$sub_name'";
		$result = $conn->query($sql1);
		if($result->num_rows > 0) 
		{
		   echo "subject_name already exist, try something else.";
        }
		else{
			
 $sql="insert into subject(sub_name,course_id)values('$sub_name','$course_id')";

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
