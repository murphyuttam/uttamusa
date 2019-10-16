<?php

$enroll=$_GET['edit'];
include 'connection.php';
$sql="select * from student where enroll='$enroll'";
$res=mysqli_query($con,$sql);
$row=mysqli_fetch_array($res);


?>
<body bgcolor="#14d3e0">
<form method="POST" action="db_sedit.php">
<table align="center" border="1" bgcolor="#eb9e34" height="300px" width="500px">
	<tr><td colspan="2" align="center">Student Record Updation</td></tr>
	<tr><td align="center">enrolment</td><td align="center"><input type="text" name="enroll" value='<?php echo $row['enroll']?>' readonly="readonly"></td></tr>
	<tr><td align="center">Name</td><td align="center"><input type="text" name="sname" value='<?php echo $row['sname']?>' readonly="readonly"></td></tr>
	<tr><td align="center">Mobile</td><td align="center"><input type="text" name="mob" value='<?php echo $row['mob']?>'></td></tr>
	<tr><td align="center">Email</td><td align="center"><input type="text" name="email" value='<?php echo $row['email']?>'></td></tr>
	<tr><td colspan="2" align="center"><input type="submit" value="update"></td></tr>
</table>
</form>