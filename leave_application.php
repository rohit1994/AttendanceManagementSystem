<!DOCTYPE html>
<!--LEAVE APPLICATION VALIDATION
  *Author:ANIT ,SURYA
-->

<html>
<head>
<title>Leave Application</title>
<link rel="stylesheet"type="text/css"href="style.css">

</head>
<body class="t">


<div align="center" class="batch">



<h1><center>Leave Application<hr></center></h1><br>
<form name="register" action="leave_report.php"   method="POST" onsubmit="return validate()">
<script>
function validate()
	{ 
		var d=document.forms["register"]["date"].value;
		var f=document.forms["register"]["stud_name"].value;
        var t=document.forms["register"]["teacher"].value;
		var s=document.forms["register"]["subject"].value;
		var c=document.forms["register"]["content"].value;
		
		if(d=="")
		{
			alert("plse entr the date");
			document.forms["register"]["date"].focus();
			return false;
		}
        else if(f=="")
		{
			alert("plse entr the student name");
			document.forms["register"]["stud_name"].focus();
			return false;
		}	
		else if(t=="")
		{
			alert("plse entr the teachers name");
			document.forms["register"]["teacher"].focus();
			return false;
		}
		
				
		else if(s=="")
		{
			alert("plse entr the subject");
			document.forms["register"]["subject"].focus();
			return false;
		}
		else if(c=="")
		{
			alert("plse entr the reason");
			document.forms["register"]["content"].focus();
			return false;
		}	
		
		
			return true;
	}
</script>
<table>
<tr><td>Date :</td><td>	<input type="date"  name="date" class="frm"><br><br></td></tr>
<tr><td>From:	</td><td>	<input type="text"  name="stud_name" class="frm"><br><br></td></tr>
<tr><td>To:	</td><td>	<input type="text"  name="teacher" class="frm"><br><br></td></tr>
<tr><td>Subject:	</td><td>	<input type="text"  name="subject" class="frm"><br><br></td></tr>
<tr><td>Reason: </td><td><textarea name="content" placeholder="Write to your leave application." class="frm"></textarea ><br><br></td></tr>
<tr><td>By:	</td><td><input type="text"  name="by" class="frm"><br><br></td></tr>
 
<tr><td><input type="submit" value="send" name="submit" class="frm-btn"><a href="dashboard.php"></a> </td>
</tr>
 </table></form>
 
 
 

 

