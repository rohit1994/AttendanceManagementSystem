<!-- STUDENT Registration
*Author:SURYA
-->

<!DOCTYPE html>
<html>
<head>
<title>Student Registration</title>
<link rel="stylesheet"type="text/css"href="style.css">
</head>
<body class="t">


<div align="center" class="teach">
<h1><center>Student Registration<hr></center></h1>
<form name="register" action="submit1.php"   method="POST" onsubmit="return validate()" >
<script>
function validate()
	{ 
		var name=document.forms["register"]["name"].value;
		var dob=document.forms["register"]["dob"].value;
		var email=document.forms["register"]["email"].value;
		var mobile=document.forms["register"]["mobile"].value;
		var gender=document.forms["register"]["gender"].value;
		var Addr=document.forms["register"]["address"].value;
		var course=document.forms["register"]["course"].value;
		var division=document.forms["register"]["division"].value;
		var doj=document.forms["register"]["doj"].value;
		var doc=document.forms["register"]["doc"].value;
		var username=document.forms["register"]["username"].value;
		var pwd=document.forms["register"]["password"].value;
		var cpwd=document.forms["register"]["conform"].value;
		
		if(name=="")
		{
			alert("plse entr the name");
			document.forms["register"]["name"].focus();
			return false;
		}	
		else if(dob=="")
		{
			alert("plse entr the Date of birth");
			document.forms["register"]["dob"].focus();
			return false;
		}	
		else if(email=="")
		{
			alert("plse entr the email");
			document.forms["register"]["email"].focus();
			return false;
		}
		else if(mobile=="")
		{
			alert("plse entr the mobile");
			document.forms["register"]["mobile"].focus();
			return false;
		}
		else if(gender=="")
		{
			alert("plse entr the gender");
			document.forms["register"]["gender"].focus();
			return false;
		}	
		else if(Addr=="")
		{
			alert("plse entr the Address");
			document.forms["register"]["address"].focus();
			return false;
		}	
		else if(course=="")
		{
			alert("plse entr the course");
			document.forms["register"]["course"].focus();
			return false;
		}
        else if(division=="")
		{
			alert("plse entr the division");
			document.forms["register"]["division"].focus();
			return false;
		}	
				
		
		else if(doj=="")
		{
			alert("plse entr the Date of joining");
			document.forms["register"]["doj"].focus();
			return false;
		}
		else if(doc=="")
		{
			alert("plse entr the Date of completion");
			document.forms["register"]["doc"].focus();
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
Date of birth:	 <input type="date"  name="dob" class="frm"><br><br>
Email:	 <input type="email"  name="email" placeholder="Enter your Email ID" class="frm"><br><br>
mobile no:	 <input type="text"  name="mobile"  placeholder="Enter your MobileNumber" class="frm"><br><br>
Gender:	 <input type="radio"  name="gender"  value="female" checked="checked" >Female
                          <input type="radio"  name="gender"  value="male" >Male<br><br>
 Address: <textarea name="address" placeholder="Enter the address" class="frm"></textarea ><br><br>
Course:<select name="course" class="frm">
<option value="jsd" class="frm">JSD</option>					 
<option value="ed" class="frm">ED</option>
<option value="ui" class="frm">UI</option>	
</select><br><br>
Division:<select name="division" class="frm">
<option value="a" class="frm">1</option>					 
<option value="b" class="frm">2</option>
</select><br><br>				 
				 


Date of joining: <input type="date"  name="doj" class="frm"><br><br>
Date of completion: <input type="date"  name="doc" class="frm"><br><br>
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