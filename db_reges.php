<?php
include 'connection.php';
$fn=$_POST['fn'];
$gmail=$_POST['gmail'];
$mobile=$_POST['mob'];
$password=$_POST['pass'];
$cpassword=$_POST['cpass'];


echo "$fn";
echo "$gmail";
echo "$mobile";
echo "$password";
echo "$cpassword";

$sql = "INSERT INTO register (fn, gmail, mob,pass,cpass)
VALUES ('$fn', '$gmail', '$mobile','$password','$cpassword')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
   
     $mes="registration sucessfull";
     echo "<script type='text/javascript'> alert('$mes');</script>";
				header("refresh:0; url=registration.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>