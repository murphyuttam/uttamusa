<?php
 
include 'connection.php';
session_start();
 
$name=$_POST['cname'];
$pname=$_POST['psname'];
$psno=$_POST['psno'];
$min=$_POST['min'];
$city=$_POST['city'];
$address=$_POST['addr'];
$date=$_POST['date'];
$desc=$_POST['description'];


$sql="insert into opencamp (cname,psname,psno,min,city,addr,date,description) VALUES ('$name','$pname','$psno','$min','$city','$address','$date','$desc')";

//$res=mysqli_query($conn,$sql);



if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
   
     $mes="details has been uploaded";
     echo "<script type='text/javascript'> alert('$mes');</script>";
        header("refresh:0; url=registration.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>