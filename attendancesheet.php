<!DOCTYPE html>
<!--  ATTENDENCE SHEET PAGE
  *Author:KRIPA MARIYA
-->
<html>
<head>
<title>
</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="t">
<div align="center" class="batch">
<h1> ATTENDANCE</h1>

<form method="post" action="mark_attendance.php">
    Course: 
	<select name="course" class="frm"> 
       <option value=""></option>
       <option value="ed">ED</option>
       <option value="jsd">JSD</option>
       <option value="ui">UI</option>
     </select><br><br>
   Division: <select name="division"class="frm">
        <option value=""></option>
        <option value="a" class="frm">1</option>
        <option value="b" class="frm">2</option>	
        </select><br><br>
	<label for="date" >date</label>
	<!--<select>
	<option value="day">day</option>
	    <option value="1">1</option>
       <option value="2">2</option>
       <option value="3">3</option>
	   <option value="4">4</option>
       <option value="5">5</option>
       <option value="6">6</option>
	</select> 
	<select>
	 <option value="month">month</option>  
	     <option value="jan">jan</option>
		 <option value="feb">feb</option>
		 <option value="march">march</option>
		 <option value="april">april</option>
	  </select> 
    <select>
	 <option value="year">year</option>   
	     <option value="1997">1997</option>
		 <option value="1998">1998</option>
		 <option value="1999">1999</option>
		 <option value="2000">2000</option>
	 </select> -->
	 <input type="date" name="date" class="frm">
	 <br><br>
  <input type="submit" name="submit" class="frm-btn"> </a>
  
 </div>    
</form>

</body>
</html>
