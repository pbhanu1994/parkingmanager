<?php
session_start();	
	include("homeheader.php");
	include("nav.php"); 
?>
<link rel="stylesheet" href="help.css" />
<title>HELP PAGE</title>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery-ui.js"></script>
<script type="text/javascript" src="js/hide.js"></script>
<body>

	<div id="maincontent">


		<div id="layout">
			<h1>LAYOUT</h1> 
			<div id="layoutcontent">
				<p>* Double click in one of the empty box (Parking Space) to add a vehicle number.</p>
				<p>* The box will turn to <mark>Red Color</mark> with the vehicle number on it.</p>
				<p>* If we want to empty the space, just click on the box and the box should turn to <mark>Green Color</mark> with the parking space number.</p>
			</div>
		</div>
			<br>
		<div id="arrived">
			<h1>ARRIVED</h1> 
			<div id="arrivedcontent">
				<p>* Fill up the <mark>Date,Customer Name, Vehicle Number, Mobile Number and Arrived Time.</mark></p>
				<p>* The Date should be in <mark>YYYY-MM-DD</mark> format.</p>
				<p>* The Arrived Time should be in <mark>hh:mm:ss</mark> format.</p>
				<p>* After filling the details click on the <mark>Submit</mark> button.</p>
				<p>* After clicking on the submit button the data will be added to the database.</p>
			</div>
		</div>
			<br>
		<div id="departure">
			<h1>DEPARTURE</h1> 
			<div id="departurecontent">
				<p>* <mark>Enter the Vehicle Number</mark> of the customer and Click on Search Button.</p>
				<p>* The details of entered Vehicle Number will appear with the <mark>input boxes for the Cost and Departure Time.</mark></p>
				<p>* <mark>Enter the Cost and Departure time</mark> and click on <mark>Update</mark> Button. </p>
				<p>* The details will update in the database with the cost and departure time. </p>
				
			</div>
		</div>
		
			<br>
		<div id="records">
			<h1>RECORDS</h1> 
			<div id="recordscontent">
				<p>* <mark>Choose a specific Date</mark> from the Drop Down Menu and click on Submit Button.</p>
				<p>* The Full Record of the Customer will be shown as per the date selected.</p>
				<p>* <mark>Enter the keywords</mark> like Customer Name, Vehicle Number, Time, Date, Mobile Number....and click on <mark>Search</mark> Button.</p>
				<p>* The Full Record of the Customer will be shown as per the keyword is typed.</p>
				
			</div>
		</div>

	</div>
</body>