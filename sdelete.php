<?php
include 'connection.php';
$gmail=$_GET['gmail'];
$sql="delete from register where gmail='$gmail'";
mysqli_query($conn,$sql);
header('location:display_records.php');

?>