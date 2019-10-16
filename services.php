<?php 
include 'connection.php';
session_start();
     
     $name=$_SESSION['fn'];
     echo "<h3 style='float:left;margin-top:8%'>Logged as: <font color='blue' size='6'>".$name."</font></h3><br>
<p style='float:right;margin-top:6%;'><a href='logout.php'><font color='red' size='6'>LOG OUT</font></a></p>"
?>
<?php
include 'header.php';?>

<!DOCTYPE html>
<html>
<head>
	<title>Campus info</title>
	<link rel="stylesheet"  href="css/animate.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css">
<script src="js/bootstrap.min.js"></script>
</head>
<body style="background-color:#e1f3f7">


				<div style="margin:4% 10% 2% 15%;">
					<h3 align="center"> Select Your Campus by Locaction</h3>
						<h4><center><strong>Choose Your Location</strong></center></h4>
                            <form method="POST" action="campinfo.php">
                    <div class="form-box">
                        <div class="form-bottom">
                                <div class="input-group form-group">
                                    <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-home"></i></span>
                                    <select type="select" class="form-control" placeholder="type your location" aria-describedby="basic-addon1" name="city">
                                    	<option>Bhopal</option>
                                    	<option>Indore</option>
                                    	<option>Jablpur</option>
                                    	<option>Itarsi</option>
                                    	
                                    </select>
                                </div>                         <center>       
                                <button type="submit" class="btn btn-success">GO</button></center>
                        </div>
                    </div>

                </div>
            </form>
                <div style="margin:7% 10% 2% 15%;">
					<h3 align="center"> Recently Added Campus</h3><br>
					<center>
					  <a href="recently_added_campus.php"><button type="submit" class="btn btn-success">GO</button></a><center>
				</div>

</body>
</html>
<?php
include 'footer.php';?>
<?php
