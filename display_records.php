<?php 
include 'header.php';?>

<?php

error_reporting(0);
include 'connection.php';
session_start();
if(isset($_SESSION['gmail']))
{
echo "<link rel='stylesheet' href='css/bootstrap.min.css'>";
echo "<script src='js/bootstrap.min.js'></script>"; 
$sql="select * from register";
$res=mysqli_query($conn,$sql);
echo "<p align='right' style='margin-left:80%;'><a href='logout.php'><font color='red' size='6px'>LOG OUT</font></a></p>";
echo "<h1 align='center'>Student's Login Details</h1>";
echo "<table align='center' border='1' class='table table-striped table-dark'>";
echo "<tr bgcolor='blue'><th><font color='white'>S.No.</font></th> 
<th><font color='white'>Full name</font></th>
<th><font color='white'>Gmail</font></th>
<th><font color='white'>Mobile</font></th>
<th><font color='white'>Password</font></th>
<th><font color='white'>Cpassword</font></th>
<th><font color='white'>verify</font></th>
<th colspan='2'><font color='white'>approve</font></th>";
$sn=1;
while($row=mysqli_fetch_array($res))
{
	if($row[5]=='0')
	{
	echo "<tr bgcolor='skyblue'><td>$sn</td>
	<td>$row[0]</td>
	<td>$row[1]</td>
	<td>$row[2]</td>
	<td>$row[3]</td>
	<td>$row[4]</td>
	<td>$row[5]</td>
	<td colspan='2'><a href='approve.php?gmail=$row[1]'>approve</a></td>";
	}
	else
		{
	echo "<tr bgcolor='grey'><td>$sn</td>
	<td>$row[0]</td>
	<td>$row[1]</td>
	<td>$row[2]</td>
	<td>$row[3]</td>
	<td>$row[4]</td>
	<td>$row[5]</td>
	
	<td><a href='sdelete.php?gmail=$row[1]'>delete</a></td>
	<td><a href='reject.php?gmail=$row[1]'>reject</a></td></tr>";
	}
	$sn++;
}

echo "</table><br>";
}
else
{
echo  "<p align='center'><font color='red' size='10px'>please logged  as admin</font></p>";
}
include 'footer.php';
?>

