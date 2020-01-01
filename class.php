<html>
<!--  CLASS PAGE
  *Author:KRIPA MARIYA
-->
<body>
<h1>Class</h1>
<form name="register" method="POST" onsubmit="return validate()" >
<script>
function validate()
	{ 
		
		
		
		var student_id=document.forms["register"]["student_id"].value;
		var batch_id=document.forms["register"]["batch_id"].value;
		
	    if(student_id=="")
		{
			alert("plse entr the student_id");
			document.forms["register"]["student_id"].focus();
			return false;
		}			
		else if(batch_id=="")
		{
			alert("plse entr the batch_id");
			document.forms["register"]["batch_id"].focus();
			return false;
		}	
		
		else{
			
		
			return true;
	}
	}
</script>

student_id:<input type="text" name="student_id"></input><br><br>
batch_id:<input type="text" name="batch_id"></input><br><br>
<input type="submit" value="submit" name="submit"></input>
</form>
<?php
include("connection.php");
session_start();

	
if(isset($_POST['submit']))
{

//$class=$_POST['class_id'];
$student=$_POST['student_id'];
$batch=$_POST['batch_id'];
	 echo "<h1>WELCOME </h1>";
	 if ((isset($_POST['student_id'])) and (isset($_POST['batch_id']))) 
	{
		$sql1="select * from class where student_id='$student'";
		$result = $conn->query($sql1);
		if($result->num_rows > 0) 
		{
		   echo "student already exist, try something else.";
        }
		else{
			
 $sql="insert into class(student_id,batch_id)values('$student','$batch')";

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
