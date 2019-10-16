<?php
include 'connection.php';

	$u=$_POST['gmail'];
	$p=$_POST['pass'];
//echo $p;
$sql="select * from register where gmail='$u'";

	$res=mysqli_query($conn,$sql);

		if($row=mysqli_fetch_array($res))
			{
				if($p==$row[3] and $row[5]=='1')
			     {
				     session_start();

				
					 $_SESSION['gmail']=$row[1];
					  $_SESSION['fn']=$row[0];

	
						header('location:services.php');
	
			      }
			else
				{$message = "password is worng or you are not verified by admin";
				echo "<script type='text/javascript'>alert('$message')</script>";
				header("Refresh:0; url=login.php");}

			}
		else
			{$message = "Try Again";
			echo "<script type='text/javascript'>alert('$message')</script>";
					header("Refresh:0; url=login.php");}
?>