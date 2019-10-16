<?php 
include 'header.php'?>
<!DOCTYPE html>
<html>
<head>
	<title>Apply now</title>

	<link rel="stylesheet"  href="css/animate.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css">
<script src="js/bootstrap.min.js"></script>
</head>
<body>
      <form method="POST" action="db_apply_now.php " enctype="multipart/form-data">
      	<h1 align="center">Please upload your details</h1>
      	<table align="center" border="2" class="table table-striped table-dark">
      		<tr>
      			<td>Full name</td>
      			<td><input type="text" name="fn" placeholder="full name" required="required"></td>
      		</tr>
      		
      		<tr>
      			<td>Date of birth</td>
      			<td><input type="Date" name="dob" placeholder="date of birth" required="required"></td>
      		</tr>
                  <tr>
                        <td>Passpost size photo</td>
                        <td><input type="file" name="r_photos" required="required"></td>
                  </tr>
      		<tr>
	<td>Gender</td>
	<td	>
		<input type="radio" name="gender"  value="m">Male
		<input type="radio" name="gender" value="f">Female
		 </td>
</tr>
      		<tr>
	<td>Email id</td><td><input type="text" name="email" placeholder="enter email"></td>
</tr>
<tr>
	<td>Mobile Number</td><td><input type="text" name="mobile" placeholder="enter mobile number"></td>
</tr>

      		<tr>
      			<td>Permanent Address</td>
      			<td><textarea name="address" required="required"></textarea></td>
      		</tr>
      		<tr>
      			<td>Qulification</td>
      			<td>
      			<select name="qualification">
			<option>10+2</option>
			<option>graduation</option>
			<option>post-graduation</option>
			
		</select>
	</td>
                  </tr>
       <tr>
                        <td>Upload CV or Reseume</td>
                        <td ><input type="file" name="r_cv" required="required"></td>
                  </tr>
      
<tr>
	<td colspan="2" align="center"><input type="submit" name="submit" value="Submit" class="btn btn-primary"></td>
</tr>
      	</table>
      </form>
</body>
</html>
<?php
include 'footer.php';?>