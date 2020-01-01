<?php
/* PARENT DATABASE CONNECTION
*Author:AROMAL
*/


include("connection.php");
session_start();

$name=$_POST['name'];
$addr=$_POST['address'];
$phn=$_POST['mobile'];
$email=$_POST['email'];
$type=$_POST['type'];
$uname=$_POST['username'];
$pswd1=$_POST['password'];
$pswd2=$_POST['conform'];
	
	
if(isset($_POST['submit']))
{
	
	 echo "<h1>WELCOME $name </h1>";
	 if ((isset($_POST['name'])) and (isset($_POST['address']))and (isset($_POST['mobile'])) and (isset($_POST['email'])) and (isset($_POST['type']))and (isset($_POST['username'])) and (isset($_POST['username']))) 
	{
		$sql1="select * from users where email='$email'";
		$result = $conn->query($sql1);
		if($result->num_rows > 0) 
		{
		   echo "Email or Username already exist, try something else.";
        }
		else{
			
 $sql="insert into users(name,address,mobile,email,type,username,password)values('$name','$addr','$phn','$email','$type','$uname','$pswd1')";

		}
		}
 if($conn->query($sql)==TRUE){
	 echo " <script>
	 window.location='dashboard.php';
	 </script>";
     }
	 else{
		 echo " <script>alert('registration error');
		 window.location='parent registration.php';
		 </script>";
	 }


}	
/*print_r($_REQUEST);*/
/*print_r($_POST);*/

?>