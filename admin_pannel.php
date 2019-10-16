<?php
include 'connection.php';
	session_start();
	 
	 $name=$_SESSION['fn'];

include 'header.php';

error_reporting(0);

session_start();
if(isset($_SESSION['gmail']))
{
	echo "<link rel='stylesheet' href='css/bootstrap.min.css'>";
echo "<script src='js/bootstrap.min.js'></script>"; 

echo "<h3 style='float:left; margin-left:-18%; margin-top:2%'>Logged as: <font color='blue' size='6'>".$name."</font></h3><br>
<p style='float:right; margin-right:2%;'><a href='logout.php'><font color='red' size='6'>LOG OUT</font></a></p>
<div style='width:80%;margin-left:10%'>
<h1 align=center><font color='darkred' style='margin-right:15%'>ADMIN PANEL</font></h1></br></br>
<table align='center' border='1' bgcolor='#ed9dda' class='table table-striped table dark'>
	<tr height='100px'><td align='center'><a href='display_records.php'><font size='6px' color='blue'>Display and Maintain Record</font></a></td></tr>
	<tr height='100px'><td align='center'><a href='opencampus.php'><font size='6px' color='blue'>Update Placement Info</font></a></td></tr>
	<tr height='100px'><td align='center'><a href='campus_applications.php'><font size='6px' color='blue'>Campus Application</font></a></td></tr>
	<tr height='100px'><td align='center'><a href='contact_message.php'><font size='6px' color='blue'>Contact Messages</font></a></td></tr>
	</table></div><br>";
}
else
{
echo "<p align='center'><font color='red' size='10px'>please logged  as admin</font></p>";
}
include 'footer.php';
?>
<body bgcolor="red">
	
</body>