<?php
/* Teacher DATABASE CONNECTION
*Author:AROMAL
*/



include("connection.php");
session_start();

$name=$_POST['name'];
$dob=$_POST['dob'];
$email=$_POST['email'];
$phn=$_POST['mobile'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$doj=$_POST['doj'];
$qualifi=$_POST['qualification'];
$type=$_POST['type'];
$uname=$_POST['username'];
$pswd1=$_POST['password'];
$pswd2=$_POST['conform'];
	
	
if(isset($_POST['submit']))
{
	
	 echo "<h1>WELCOME $name </h1>";
	 if ((isset($_POST['name']))and (isset($_POST['dob']))and (isset($_POST['gender']))and (isset($_POST['doj'])) and (isset($_POST['qualification'])) and (isset($_POST['type'])) and (isset($_POST['address']))and (isset($_POST['mobile'])) and (isset($_POST['email']))and (isset($_POST['username'])) and (isset($_POST['password']))) 
	{
		$sql1="select * from users where email='$email'";
		$result = $conn->query($sql1);
		if($result->num_rows > 0) 
		{
		   echo "Email or Username already exist, try something else.";
        }
		else{
			
 $sql="insert into users(name,dob,email,mobile,gender,address,doj,qualification,type,username,password)values('$name','$dob','$email','$phn','$gender','$address','$doj','$qualifi','$type','$uname','$pswd1')";

		}
		}
 if($conn->query($sql)==TRUE){
	 echo " <script>
	 window.location='dashboard.php';
	 </script>";
     }
	 else{
		 echo " <script>alert('registration error');
		 window.location='teacherregistration1.php';
		 </script>";
	 }


}	
/*print_r($_REQUEST);*/
/*print_r($_POST);*/

?>