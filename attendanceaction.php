 <?php session_start(); ?>
 <?php
 
 /*  ATTENDENCE ACTION 
  *Author:AROMAL
*/
include("connection.php");

//if(isset($_POST['submit']))
//{
echo $date=$_GET['date'];
echo "<br>";
 $name=$_GET['name'];
 $course=$_GET['course'];
 $division=$_GET['division'];
foreach ($_GET['attendance'] as $key => $value)
{
	echo $cname=$key;
	echo "<br>";
	echo $status=$value;
	echo "<br>";
	foreach ($_GET['attendance1'] as $keyo => $values)
{
	echo $uname=$keyo;
	echo "<br>";
	echo $stat=$values;
	echo "<br>";
}		
	
}		

  $sql="insert into attendence(date,course,division,name,fn)values('$date','$course','$division','$cname','$status')";
   if($conn->query($sql)==TRUE){
	  echo "success";
	  echo "<br>";
	/*echo " <script>
	 window.location='mark_attendance.php';
	 </script>";*/
     }
	 else{
		 echo "failure";
		/* echo " <script>alert('error');
		 window.location='mark_attendance.php';
		 </script>";*/
	 }
  $qry="update attendence set an='$stat' where date='$date' and name='$name'";
 
	 if($conn->query($qry)==TRUE){
	  echo "success";
     }
	 else{
		 echo "failure";
	 }


//}	?>