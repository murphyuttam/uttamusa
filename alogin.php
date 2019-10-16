<?php
include 'connection.php';

	$u=$_POST['gmail'];
	$p=$_POST['pass'];
//echo $p;
$sql="select * from admin where gmail='$u'";

	$res=mysqli_query($conn,$sql);


		if($row=mysqli_fetch_array($res))
			{
				if($p==$row[3])
			     {
				     session_start();

				
					 $_SESSION['gmail']=$row[1];
					 $_SESSION['fn']=$row[0];

	
						header('location:admin_pannel.php');
	
			      }
			else
				{$message = "Try";
				echo "<script type='text/javascript'>alert('$message')</script>";
				header("Refresh:0; url=admin_login.php");}

			}
		else
			{$message = "Try Again";
			echo "<script type='text/javascript'>alert('$message')</script>";
					header("Refresh:0; url=admin_login.php");}
?>