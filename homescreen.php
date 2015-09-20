<?php 
session_start();
 ?>
<html>
	<head>
		<title>
			WELCOME TO PARKSPACE MANAGER
		</title>
		<link rel="stylesheet" href="homescreen.css">
	</head>
	<body id="wholepage">

			<?php
				include("homeheader.php");
				include("nav.php");
				
			?>
			
	<div id="maincontent">
	<h1 id="welcomename">Welcome <?php echo $_SESSION['fname']."\t".$_SESSION['lname']; ?></h1>
		<aside>
			<div id="sidebox">
				<label class="sidecontent"><a href="">>>Categories</a></label>
				<label class="sidecontent"><a href="">>Search</a></label>
				<label class="sidecontent"><a href="">Vehicle Type</a></label>
				<label class="sidecontent"><a href="">Time</a></label>
			</div>

			<div id="sidebox2">
				<label class="sidecontent2"><a href="">>>FILTER</a></label><br>
				<label class="sidecontent2"><a href="">DISABLE PARKING</a></label><br>
				<label class="sidecontent2"><a href="">VISITOR PARKING</a></label><br>
				<label class="sidecontent2"><a href="">FAVORITE</a></label><br>
			</div>
			
	<div id="adminbutton">
	<a href="profileinfo.php"><img src="images/admindetails.png" id="admingo" /></a>
		
	</div>
		</aside>
		<footer>
			
		</footer>
		</div>
		</div>
	</body>
</html>