<?php include "header.php" ?>
<?php

echo "
<p style='float:right; margin-right:-26%;margin-top:0%;'><a href='logout.php'><font color='red' size='6'>LOG OUT</font></a></p>"?>
<html>
<head>
	<title></title>
	<link rel="stylesheet"  href="css/animate.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css">
<script src="js/bootstrap.min.js"></script>
<style>
	input{
		border: 2px solid skyblue;
	}
</style>
</head>
<body>
	<br>
	
<center>
	<div style="margin:5% 5% 5% 5%;" height="400px" width="600px;">
	<form method="POST" action="db_opencampus.php">
		
		<h2 align="center">Please Enter New Campus!</h2><br>
<table class="table table-striped table-dark" >
	
<tr align="center">
	<td>Company Name</td>
	<td><input type="text" name="cname" placeholder="enter your Company Name"></td>
</tr>


<tr align="center">
	<td>Post Name</td>
	<td><input type="text" name="psname" placeholder="enter post name"></td>

</tr>

<tr align="center">
	<td>No. Of Post</td>
	<td><input type="number" name="psno" placeholder="enter number of post"></td>
</tr>
<tr align="center">
	<td>Min. Qualification</td>
	<td><select name="min">
		<option>Diploma</option>
		<option>Degree</option>
	</select></td>
</tr>

<tr align="center">
	<td>Select City</td>
	<td><select name="city">
		<option>Bhopal</option>
		<option>Indore</option>
		<option>Jablpur</option>
		<option>Itarsi</option>
	</select></td>
</tr>

<tr align="center">
	<td>Address</td>
	<td><input type="text" name="addr" placeholder="Enter Address"></td>
</tr>

<tr align="center">
	<td>Campus Date</td>
	<td><input type="date" name="date"></td>
</tr>

<tr align="center">
	<td>Description</td>
	<td><textarea name="description"></textarea></td>
</tr>
<tr align="center">
	<td colspan="2" align="center"><input type="submit" name="submit" value="Submit" class="btn btn-primary"></td>
</tr>
</table>
<br><br>
</form>
</div>
</center>
</body>
</html>
<?php include "footer.php" ?>