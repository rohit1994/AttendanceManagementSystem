<!DOCTYPE html>
<!--  ATTENDENCE VIEW
  *Author:ROHIT
-->
<html>
<head>
<title>
</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="t">
<div align="center" class="batch" >
<center><h1> ATTENDANCE VIEW</h1></center>

<form method="post" action="attendanceviewaction.php">
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
	<label for="date">date</label>
	
	 <input type="date" name="date" class="frm">
	 <br><br>
  <input type="submit" name="submit" class="frm-btn"> </a>
  
 </div>    
</form>

</body>
</html>
