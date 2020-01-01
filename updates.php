<?php
/* STUDENT Updation
*Author:AMRITHA
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
//$conn=new mysqli($servername,$username,$password,$dbname);
$qry="update users set name='$name',dob='$dob',email='$email',mobile='$mobile',gender='$gender',address='$address',doj='$doj',doc='$doc',username='$username',password='$password' where id='$id'";
if ($conn->query($qry) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}



//$db->insertQuery($qry);
//$db->closeDatabase();
//header('Location:depoadview.php');
echo "<script>alert('Success'); window.location='stu_view.php';</script>";
?>
