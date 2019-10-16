<?php
include 'connection.php';


$gmail=$_GET['gmail'];

$sql="update register set verify='1' where gmail='$gmail'";
mysqli_query($conn,$sql);

header('location:display_records.php');





?>