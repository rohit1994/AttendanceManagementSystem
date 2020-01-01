<!DOCTYPE>
<!--  DIVISION VALIDATION
  *Author:ROHIT
-->
<html>
<body>
<h1>division</h1>
<form name="register" method="POST" onsubmit="return validate()" >
<script>
function validate()
	{ 
	
		var division_id=document.forms["register"]["division_id"].value;
		var course_id=document.forms["register"]["course_id"].value;
		var name=document.forms["register"]["name"].value;
		
		
		if(division_id=="")
		{
			alert("plse entr the division_id");
			document.forms["register"]["division_id"].focus();
			return false;
		}	
		else if(course_id=="")
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
		else{
			
		
			return true;
	}
	}
</script>
division_id:<input type="text" name="division_id"></input><br><br>
course_id:<input type="text" name="course_id"></input><br><br>
name:<input type="text" name="name"></input><br><br>
<input type="submit" value="submit" name="submit"></input>
</form>
<?php
include("connection.php");
session_start();

	
if(isset($_POST['submit']))
{
$div=$_POST['division_id'];
$course=$_POST['course_id'];
$name=$_POST['name'];
	 echo "<h1>WELCOME $name</h1>";
	 if ((isset($_POST['division_id'])) and (isset($_POST['course_id'])) and (isset($_POST['name'])) ) 
	{
		$sql1="select * from division where name='$name'";
		$result = $conn->query($sql1);
		if($result->num_rows > 0) 
		{
		   echo "name already exist, try something else.";
        }
		else{
			
 $sql="insert into division(division_id,course_id,name)values('$div','$course','$name')";

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
