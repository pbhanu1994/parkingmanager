<?php
session_start();
include("db.php");
	?>
<!DOCTYPE html>
<html>
	<head>
		<title>Home!</title>
		<link rel="stylesheet" type="text/css" href="home.css"> 
	</head>
	<body>
	
	<div id="wholepage">
		<?php
			include("header.php");
			include("nav.php");
		?>
		<div id="mainbox">
		<section>
			<h1 id="welcomeback">Welcome Back! <?php 
				
			?></h1>
			<h2 id="lastarrived">Last arrived:</h2>
			<h2 id="messages">Messages:</h2>
			<h2 id="friendrequests">Friend Requests:</h2>

		</section>
		</div>
            
        </div>
        jQuery Stops above -->
		<?php 
			include("footer.php");
			
		?>
		</div>
	</body>
</html>
