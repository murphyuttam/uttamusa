
<?php
include 'header.php';
include 'connection.php';

$sql="select * from upload";
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


#div1{margin:2% 10%; text-align:center; box-shadow:0px 0px 50px blue; padding:1% 5% 1% 5%;}
h1{color:blue;}
</style>

<script>


</script>
</head>";

echo "<h1 align='center'>Student's Details</h1>";

while($row=mysqli_fetch_array($res))
{
		echo "<div id='div1'>
			<table class='table'>
			<tr>
			<th>full Name </th><th>".$row['fn']."</th>
			</tr>
			<tr>
			<th>Date of Birth </th><th>".$row['dob']."</th>
			</tr>
			<tr>
			<th>Passport Photo</th><th>".$row['r_photos']."</th>
			</tr>
			<tr>
			<th>Gender</th><th>".$row['gender']."</th>
			</tr>
			<th>Email</th><th>".$row['email']."</th>
			</tr>
			<th>Mobile</th><th>".$row['mobile']."</th>
			</tr>
			<th>Address</th><th>".$row['address']."</th>
			</tr>
			<th>Qualification</th><th>".$row['qualification']."</th>
			</tr>
			<th>Reseume or CV</th><th>".$row['r_cv']."</th>
			</tr></table>
			
			</div>";
}
?>
<?php 
include 'footer.php';?>