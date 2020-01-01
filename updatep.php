<?php
/* Parent Updation
*Author:KRIPA MARIYA
*/


include('Connection.php');
echo $id=$_GET['id'];
$name=$_GET['name'];
$address=$_GET['address'];
$mobile=$_GET['mobile'];
$email=$_GET['email'];

$username=$_GET['username'];

$password=$_GET['password'];
$db=new $conn;
//$conn=new mysqli($servername,$username,$password,$dbname);
$qry="update users set name='$name',address='$address',mobile='$mobile',email='$email',username='$username',password='$password' where id='$id'";
if ($conn->query($qry) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}



//$db->insertQuery($qry);
//$db->closeDatabase();
//header('Location:depoadview.php');
echo "<script>alert('Success'); window.location='parent_view.php';</script>";
?>
