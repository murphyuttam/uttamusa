
<?php
include 'header.php';
include 'connection.php';
session_start();
     
     $name=$_SESSION['fn'];
     echo "<h3 style='float:left;margin-left:-19%;margin-top:2%'>Logged as: <font color='blue' size='6'>".$name."</font></h3><br>
<p style='float:right;'><a href='logout.php'><font color='red' size='6'>LOG OUT</font></a></p>";

$sql="select * from opencamp";
$res=mysqli_query($conn,$sql);
echo "<html>
<head><title>Locatin</title>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link rel='stylesheet'  href='css/animate.css'>
<link rel='stylesheet' type='text/css' href='css/bootstrap.min.css'>
<link rel='stylesheet' type='text/css' href='css/bootstrap-grid.min.css'>
<link rel='stylesheet' type='text/css' href='css/font-awesome.min.css'>
<script src='js/bootstrap.min.js'></script>
<style>


#div1{margin:2% 10%; text-align:center; box-shadow:0px 0px 50px green; padding:1% 5% 1% 5%;}
h1{color:blue;}
</style>

<script>



</script>
</head>";


echo "<h1 align='center' style='margin-right:20%;'>Recently Added Campus</h1>";
while($row=mysqli_fetch_array($res))
{
		echo "<div id='div1'>
			<table class='table'>
			<tr>
			<th>Company name </th><th>".$row['cname']."</th>
			</tr>
			<tr>
			<th>Post Name </th><th>".$row['psname']."</th>
			</tr>
			<tr>
			<th>Post Number</th><th>".$row['psno']."</th>
			</tr>
			<tr>
			<th>Min Qualification</th><th>".$row['min']."</th>
			</tr>
			<th>City</th><th>".$row['city']."</th>
			</tr>
			<th>Address</th><th>".$row['addr']."</th>
			</tr>
			<th>Date</th><th>".$row['date']."</th>
			</tr>
			<th>Description</th><th>".$row['description']."</th>
			</tr></table>
			<button class='btn btn-primary btn-lg btn-block'><a href='apply_now.php'><font color='white'>Apply Now</font></button></a>
			

			</div>";
}
?>
<?php 
include 'footer.php';?>