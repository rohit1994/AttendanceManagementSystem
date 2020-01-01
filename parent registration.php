<?php require "header.php"; ?>
<!DOCTYPE html>


<!-- PARENT REGISTRATION
*Author:BONY
-->


<html>
<head>
<title>Parent Registration</title>
<link rel="stylesheet"type="text/css"href="style.css">

</head>
<body class="t">


<div align="center" class="teach">
<h1><center>Parent Registration<hr></center></h1>
<form name="register" action="submit.php"   method="POST" onsubmit="return validate();" >
<script>
function validate()
	{ 
		var name=document.forms["register"]["name"].value;
		var Addr=document.forms["register"]["address"].value;
        var mobile=document.forms["register"]["mobile"].value;
		var email=document.forms["register"]["email"].value;
		var username=document.forms["register"]["username"].value;
		var pwd=document.forms["register"]["password"].value;
		var cpwd=document.forms["register"]["conform"].value;
		
		if(name=="")
		{
			alert("plse entr the name");
			document.forms["register"]["name"].focus();
			return false;
		}
        else if(Addr=="")
		{
			alert("plse entr the Address");
			document.forms["register"]["address"].focus();
			return false;
		}	
		else if(mobile=="")
		{
			alert("plse entr the mobile");
			document.forms["register"]["mobile"].focus();
			return false;
		}
		
				
		else if(email=="")
		{
			alert("plse entr the email");
			document.forms["register"]["email"].focus();
			return false;
		}
		else if(username=="")
		{
			alert("plse entr the username");
			document.forms["register"]["username"].focus();
			return false;
		}	
		
		else if(pwd=="")
		{
			alert("plse entr the password");
			document.forms["register"]["password"].focus();
			return false;
		}	
		else if(cpwd=="")
		{
			alert("plse confirm the password");
			document.forms["register"]["conform"].focus();
			return false;
		}	
		
		else if(pwd.length<6)
		{
			alert("password min 6 value");
			document.forms["register"]["password"].focus();
			return false;
		}	
		else if(pwd==cpwd)
			{
				return true;
			}
		else{
			alert("Password and conform password");
			return false;
		    }
		alert("checkpoint1");
			return true;
	}
</script>
Name:	 <input type="text"  name="name" placeholder="Enter your Name" class="frm"><br><br>
Address: <textarea name="address" placeholder="Enter the address" class="frm"></textarea><br><br>
Mobile no:	 <input type="text"  name="mobile"  placeholder="Enter your MobileNumber" class="frm"><br><br>
Email:	 <input type="email"  name="email" placeholder="Enter your Email ID" class="frm"><br><br>
Account type:<select name="type" class="frm">
<option value="stu" class="frm">student</option>					 
<option value="teach" class="frm">Teacher</option>
<option value="parent" class="frm">Parent</option>	
</select><br><br>				 

Username:	 <input type="text"  name="username"  placeholder="Enter your username" class="frm"><br><br>
Password:	 <input type="password"  name="password" placeholder="Enter your Password" class="frm"><br><br>
Conform: <input type="password"  name="conform" class="frm" placeholder="Enter conform Password" class="frm"><br><br>
		 <input type="submit" value="send" name="submit" class="frm-btn"></form>
		 <a href="dashboard.php"><input type="submit" value="back" class="frm-btn" ></a>
</div>
</body>
</html>