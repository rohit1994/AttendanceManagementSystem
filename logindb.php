<?php
/* LOGIN DATABASE CONNECTION
*Author:AROMAL
*/
include("connection.php");
if(isset($_POST['login']))
{
	$User=$_POST['username'];
	$Password=$_POST['password'];
	$sql="select * from users where username='$User' && password='$Password'";
	$result=$conn->query($sql);
	if($result -> num_rows>0)
	{
		$r=$result->fetch_array();
		$u=$r['type'];
		if($u=="admin")
		{
		    echo " <script> alert('welcome Admin'); 
	            window.location='dashboard.php';
	            </script>";
		}
		else if($u=="stu")
		{
		   echo " <script> alert('welcome student'); 
	            window.location='studentdashboard.php';
	            </script>";
		}
		else if($u=="parent")
		{
			echo " <script> alert('welcome Parent'); 
	            window.location='parent_dashboard.php';
	            </script>";
		}
		else if($u=="teach")
		{
			echo " <script> alert('welcome Teacher'); 
	            window.location='teacher_dashbord.php';
	            </script>";
		}
		else
		{
			echo " <script> alert('Invalid Login'); 
	            window.location='login1.php';
	            </script>";
		}
			
			
			
	}
	$conn->close();
}
?>
