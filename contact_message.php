
<?php
include 'header.php';
include 'connection.php';

$sql="select * from contact";
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

echo "<h1 align='center' style='margin-left:35%;'>Student's Message's</h1>";

while($row=mysqli_fetch_array($res))
{
		echo "<div id='div1'>
			<table class='table'>
			<tr>
			<th>full Name </th><th>".$row['name']."</th>
			</tr>
			<tr>
			<th>Gmail Id </th><th>".$row['gmail']."</th>
			</tr>
			<tr>
			<th>Phone Number</th><th>".$row['mobile']."</th>
			</tr>
			<tr>
			<th>Message</th><th>".$row['message']."</th>
			</tr></table>
			
			</div>";
}
?>
<?php 
include 'footer.php';?>