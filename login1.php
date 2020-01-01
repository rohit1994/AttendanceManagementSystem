
<script>
                 // LOGIN CLIENT SIDE VALIDATION
				//  Author:ANIT


function validate()
{
	
	
	var username=document.forms["login"]["username"].value;
	if(username=="")
	{
		alert("enter user name");
		document.forms["login"]["username"].focus();
		return false;
	}
	
	
	
	var password=document.forms["login"]["password"].value;
	if(password=="")
	{
		alert("enter password");
		document.forms["login"]["password"].focus();
		return false;
	}

	
	
		
	
	
}


</script>



<link rel="stylesheet"type="text/css"href="style.css">
<center>
<div class="lg">
<form method="POST" name="login" onsubmit="return validate()" action="logindb.php" class="lg-f">
<table class="">
 
<tr><td><strong>Username:</strong></td><td><input type="text" name="username" class="frm"><br><br> </td>
</tr>
<tr>
<td><strong>Password:</strong></td><td><input type="password" name="password" class="frm"><br><br> </td>
</tr>
 </table>
<input type="submit" name="login"value="login" class="frm-btn"> 



</form>
<a href="contact.php"> Contact us </a>&nbsp&nbsp
<a href="#"> Forgott Password </a>
      
</div>
</center>

