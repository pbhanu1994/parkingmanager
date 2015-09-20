<!DOCTYPE html>
<html>
	<head>
		<title>Registration Confirm</title>
		<link rel="stylesheet" type="text/css" href="confirmregistration.css" />
		<script type="text/javascript" src="confirmregistration.js"></script>
	</head>
	<body>
	<div id="wholepage">
	<div id="pagewrapper">
		<header id="header">
			<div>
				<img src="images/logo.png" id="logo" />
			</div>
			<div id="backheader">
				<p id="headtext">Parking Manager</p>
			</div>
		</header>
		<div id="section">s
		<section>
			<div id="maincontent">
				<div><h1 class="thankyou">Hello <?php echo $_POST["fname"]; ?>!</h1></div>
				<div><h1 class= ="thankyou" id="thank">Thank you for registering!</h1></div>
				<div>
					
				</div>
				
			</div>
			
			<div id="note">
				<h2 class="notedetails">* You are almost there!</h2>
				<h2 class="notedetails">* Enjoy the Park Space Manager Software!</h2>
				
				<h2 class="notedetails">* Click Login button to go to the Login page!</h2>

				<div id="backButtonDiv">
					<a href="index.php"><img src="images/login.png" id="backbutton" /></a>

					<!--
					<a href="homescreen.php"><img src="images/continue.png" id="continuebutton">
					-->

				</div>
				<!--<div id="continueButtonDiv">
					<a href="home.php"><img src="images/continue.png" id="continuebutton" /></a>
				</div> -->

			</div>
			</div>
			<?php 
				include_once("db.php");

				$fname = $_POST['fname'];
				$lname = $_POST['lname'];
				$sex = $_POST['sex'];
				$username = $_POST['username'];
				$email = $_POST['email'];
				$password = $_POST['password'];
				//Date of Birth
				$day = $_POST["day"];
				$month = $_POST["month"];
				$year = $_POST["year"];

				
				$sql = mysql_query("INSERT INTO registration (fname,lname,sex,username,email,password,day,month,year) VALUES ('$fname','$lname','$sex','$username','$email','$password','$day','$month','$year')");
					
				if(!$sql) {
					die("Error".mysql_error());
					mysql_close();
			}
			?>
		</section>
		</div>
		</div>
		

		<!-- MYSQL DATABASE CODING ENDS HERE -->

		
	</body>
</html>