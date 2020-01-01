<?php
/*  STUDENT'S EDIT 
  *Author:AMRITHA
*/

$servername = "localhost";
$username = "root";
$password= "";
$dbname = "attendencemanagement";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$id=$_GET['id'];
$sql = "SELECT * FROM users WHERE id='$id'";
$result=$conn->query($sql);
foreach($result as $row)
{
	//print_r($row);
echo "<br>";
echo "<tr>";
"<td>".$row["id"]."</td>";
"<td>".$row["name"]."</td>";
"<td>".$row["dob"]."</td>";
"<td>".$row["email"]."</td>";
 "<td>".$row["mobile"]."</td>";
"<td>".$row["gender"]."</td>";
 "<td>".$row["address"]."</td>";
 "<td>".$row["doj"]."</td>";
"<td>".$row["doc"]."</td>";
"<td>".$row["username"]."</td>";
"<td>".$row["password"]."</td>";
}?>
<!DOCTYPE html>
<html>
<head>
<title>Student Registration</title>
<link rel="stylesheet"type="text/css"href="style.css">
</head>
<body class="t">


<div align="center" class="teach">
<h1><center>Edit Profile<hr></center></h1>
<form action="updates.php" method="GET">
    <input type="hidden"  name="id" value="<?php echo $id;?>" ><br><br>  

Name:	 <input type="text"  name="name"  class="frm" value="<?php echo $row["name"];?>"><br><br>
Date of birth:	 <input type="date"  name="dob" class="frm" value="<?php echo $row["dob"];?>"><br><br>
Email:	 <input type="email"  name="email"class="frm" value="<?php echo $row["email"];?>"><br><br>
mobile no:	 <input type="text"  name="mobile"   class="frm" value="<?php echo $row["mobile"];?>"><br><br>
Gender:	 <input type="radio"  name="gender"  value="female" >Female
                          <input type="radio"  name="gender"  value="male" value="<?php echo $row["gender"];?>">Male<br><br>
Address: <textarea name="address"  class="frm" value="<?php echo $row["address"];?>"></textarea ><br><br>
Date of joining: <input type="date"  name="doj" class="frm" value="<?php echo $row["doj"];?>"><br><br>
Date of completion: <input type="date"  name="doc" class="frm"value="<?php echo $row["doc"];?>" ><br><br>
Username:	 <input type="text"  name="username"  class="frm" value="<?php echo $row["username"];?>"><br><br>
Password:	 <input type="password"  name="password" class="frm" value="<?php echo $row["password"];?>"><br><br>

		 <input type="submit" value="Update" name="submit" class="frm-btn"></form>

</div>
</body>
</html>