<?php
/*  TEACHER'S EDIT 
  *Author:KRIPA MARIYA
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
"<td>".$row["qualification"]."</td>";
"<td>".$row["username"]."</td>";
"<td>".$row["password"]."</td>";
}?>
<!DOCTYPE html>
<html>
<head>
<title>Staff Registration</title>
<link rel="stylesheet"type="text/css"href="style.css">
</head>
<body class="t">


<div align="center" class="teach">
<h1><center>Edit Profile<hr></center></h1>
<form action="updatet.php" method="GET">
    <input type="hidden"  name="id" value="<?php echo $id;?>" ><br><br>  
Name:	 <input type="text"  name="name" placeholder="Enter your Name" class="frm" value="<?php echo $row["name"];?>"><br><br>
Date of birth:	 <input type="date"  name="dob" class="frm" value="<?php echo $row["dob"];?>"><br><br>
Email:	 <input type="email"  name="email" placeholder="Enter your Email ID" class="frm" value="<?php echo $row["email"];?>"><br><br>
mobile no:	 <input type="text"  name="mobile"  placeholder="Enter your MobileNumber" class="frm" value="<?php echo $row["mobile"];?>"><br><br>
Gender:	 <input type="radio"  name="gender"  value="female" >Female
                          <input type="radio"  name="gender"  value="male" value="<?php echo $row["gender"];?>">Male<br><br>
Address: <textarea name="address" placeholder="Enter the address" class="frm" value="<?php echo $row["address"];?>"></textarea ><br><br>
Date of joining: <input type="date"  name="doj" class="frm" value="<?php echo $row["doj"];?>"><br><br>

Qualification:  <select   name="qualification" class="frm" value="<?php echo $row["qualification"];?>"><br><br>
                 <option value="B.tech" class="frm">B.tech</option>
				  <option value="Deploma" class="frm">Deploma</option>
				   <option value="BCA" class="frm">BCA</option>
				    <option value="MCA" class="frm">MCA</option>
					 <option value="BSC" class="frm">BSC</option></select><br><br>

Username:	 <input type="text"  name="username"  placeholder="Enter your username" class="frm" value="<?php echo $row["username"];?>"><br><br>
Password:	 <input type="password"  name="password" placeholder="Enter your Password" class="frm" value="<?php echo $row["password"];?>"><br><br>

		 <input type="submit" value="Update" name="submit" class="frm-btn"></form>

</div>
</body>
</html>