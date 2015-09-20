<?php 
session_start();
include("homeheader.php");
include("nav.php");
include ("db.php");
	$date = $_SESSION['date'];
	$cname = $_SESSION['cname'];
	$vnumber = $_SESSION['vnumber'];
	$mnumber = $_SESSION['mnumber'];
	$atime = $_SESSION['atime'];

	$query = mysql_query("INSERT INTO vehicle_details (Date,CustomerName,VehicleNumber,MobileNumber,ArrivedTime) VALUES ('$date','$cname','$vnumber','$mnumber','$atime')");
	if(!$query){
		die("Error".mysql_error());
		mysql_close();
	}
?>
<link rel="stylesheet" href="save.css">
<body> 
<div id="savebody">
	
<h3 id="notetext">Note: Click on Continue Button for going back to the file page</h3>
	<h1 id="savetext">DATA SAVED SUCCESSFULLY!</h1>
	<a href="arrived.php" ><img src="images/continue.png" alt="CONTINUE" id="saveimage" ></a>
</div>
</body>