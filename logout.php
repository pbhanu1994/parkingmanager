<?php
session_start(); 
session_unset();
session_destroy();

?>
<html>
	<head>
		<title>LogOut!</title>
		<link rel="stylesheet" type="text/css" href="logout.css" />
	</head>
	<body>
		<div id="wholepage">
		<div id="maincontent">
			<h1 id="seeyousoon">See You Soon!</h1>
			<h2>Click below button to go back to the login page!</h2>
				<a href="index.php"><img id="loginbutton"src="images/login.png"></a>
			</div>
			</div>
			
	</body>
</html>