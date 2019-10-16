<!DOCTYPE html>
<html>
<head>
	<title>registration form</title>
	<link rel="stylesheet"  href="css/animate.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css">
<script src="js/bootstrap.min.js"></script>

<style >
	#grad1 {
  
  background-color: red;
 
background-image: linear-gradient(-20deg, #b721ff 0%, #21d4fd 100%);
}
	body{
		background-color:red;
		
		background-repeat: no-repeat;
		background-size: cover;
		
	}
	td{
		color:#ffffff;
	}
	tr
	{
		
		font-size: 16px;
	}
	table{
		border-radius: 10px;
		margin-left: 24%;
	}
	input
	{
		border-radius: 8px 0px 8px 0px;
		border-color: red;
	}
	a
	{
		color: yellow;
	}
	#h
	{
		color: white;
	}
</style>
<script>
	function validate()
	{
		var name=document.getElementById("n").value;
		var gmail=document.getElementById("gn").value;
		var mobile=document.getElementById("mob").value;
		var password=document.getElementById("c").value;
		
		var cpasword=document.getElementById("cp").value;

	
		if(name=="")
		{
				document.getElementById("span_n").innerHTML="name can not be empty";
				return false;
		}
		if(gmail=="")
		{
				document.getElementById("span_gn").innerHTML="mail can not be empty";
				return false;
		}
		if(mobile=="")
		{
				document.getElementById("span_mob").innerHTML="mobile can not be empty";
				return false;
		}
		if(password!=cpasword)
		{
			alert("password does not match");
			return false;
		}
		return true;
	}
</script>
</head>
<body style="background-color:#25b3cc">
	<?php include 'header.php'; ?>

	<h1 class="animated heartBeat" align="center"><font color="#364045">Register Admin</font> </h1><br><br>
	<div class="container">
		<form method="POST" action="db_admin_register.php" onsubmit="return validate()">
	<table id="grad1" align="center" bgcolor="#a5f0be" border="0px" height="350px" width="500px">
		<tr align="center">
			<td>FULL NAME</td>
			<td><input type="text" name="fn" id="n">
				<br><span id="span_n"></td>
		</tr>
		<tr align="center">
			<td>GMAIL</td>
			<td><input type="email" name="gmail" id="gn">
				<br><span id="span_gn"></td>
		</tr>
		<tr align="center">
			<td>MOBILE NUMBER</td>
			<td><input type="text" name="mob" id="mob">
				<br><span id="span_mob"></td>
		</tr>
		<tr align="center">
			<td>PASSWORD</td>
			<td><input type="password" name="pass" id="c"></td>
		</tr>
		<tr align="center">
			<td>CONFIRM PASSWORD</td>
			<td><input type="password" name="cpass" id="cp"></td>
		</tr>
	</table><br>
<center>
	<button type="submit" class="btn btn-success">SUBMIT</button><br><br>
	<h2 id="h"><font size="4px">click here to <font size="4px" color="darkblack"><a href="admin_login.php" >LOGIN</a></font> if you are already registered</font></h2>
</center>
</div>
</form>
<?php include 'footer.php';?>
</body>
</html>