<?php
include 'connection.php';




$r_photos = $_FILES['r_photos']['name'];

$r_cv = $_FILES['r_cv']['name'];
  	// Get text
$fn=$_POST['fn'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$address=$_POST['address'];
$qualification=$_POST['qualification'];  
    

  	// image file directory
  	$target = "upload/".basename($r_photos);
    $target1 = "upload/".basename($r_cv);

  	$sql = "INSERT INTO upload (fn, dob, r_photos, gender, email, mobile, address, qualification,r_cv)
VALUES ('$fn', '$dob','$r_photos', '$gender', '$email', '$mobile', '$address', '$qualification','$r_cv')";
  	// execute query
  	mysqli_query($conn, $sql);

  	if (move_uploaded_file($_FILES['r_photos']['tmp_name'], $target) and move_uploaded_file($_FILES['r_cv']['tmp_name'], $target1)) {
  		$msg = "Details & Image uploaded successfully";
		echo "<script type='text/javascript'>alert('$msg')</script>";
		header("Refresh:0; url=apply_now.php");
  	}
  	else
  	{
  		$message = "Failed to upload image";
		echo "<script type='text/javascript'>alert('$message')</script>";
		header("Refresh:0; url=apply_now.php");
  	}
?>

