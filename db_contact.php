<?php
include 'connection.php';
$fn=$_POST['name'];
$gmail=$_POST['gmail'];
$mobile=$_POST['mobile'];
$message=$_POST['message'];




$sql = "INSERT INTO contact (name, gmail, mobile,message)
VALUES ('$fn', '$gmail', '$mobile','$message')";

if ($conn->query($sql) === TRUE) {
    
   
     $mes="you will get reply in your mail";
     echo "<script type='text/javascript'> alert('$mes');</script>";
				header("refresh:0; url=contact.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>