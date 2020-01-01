
<?php
/* LEAVE ACCEPT PAGE
  *Author:ANIT ,SURYA
*/

include('Connection.php');
echo $id=$_GET['id'];
$name=$_GET['name'];
$dob=$_GET['dob'];
$email=$_GET['email'];
$mobile=$_GET['mobile'];
$gender=$_GET['gender'];
$address=$_GET['address'];
$doj=$_GET['doj'];
$doc=$_GET['doc'];
$username=$_GET['username'];

$password=$_GET['password'];
$db=new $conn;
