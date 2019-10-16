<?php

include 'connection.php';

$admin=$_POST['uname'];
$p=$_POST['pass'];

echo "<br>".$u;
echo "<br>".$p;
$sql="select * from login where userid='$admin'";
$res=mysqli_query($con,$sql);
if($row=mysqli_fetch_array($res))
{
	if($p==$row[1])
	{
		session_start();
	
	$_SESSION['id']=$row[0];
		header('location:admin_panel.php');
	}
	else
		header('location:index.html');
}
else
header('location:index.html');

?>