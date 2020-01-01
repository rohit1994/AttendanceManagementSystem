<?php
/*  PARENT DELETION
  *Author:ANIT
*/
include('Connection.php');
echo $id=$_GET['id'];
$name=$_GET['name'];
$address=$_GET['address'];
$email=$_GET['email'];
$mobile=$_GET['mobile'];
$username=$_GET['username'];
$password=$_GET['password'];
$db=new $conn;
//$conn=new mysqli($servername,$username,$password,$dbname);
$qry="delete from users  where id='$id'";
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
