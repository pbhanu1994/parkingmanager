<html>
    <head>
	  		<link rel="stylesheet" href="arrived.css">
	  		<title>ARRIVED PAGE</title>
    </head>

<body>
	<?php include("homeheader.php");
		include("nav.php"); ?>
		<br>
		
<div id="mainfilecontent">
		<div id="fileheader">
				<h1 id="filetext">ARRIVED</h1>
		</div>	
<h3 id="clickoncontinue">Note: Click on Continue Button after filling the details</h3>
		<table id="table">
			<caption id="detailstext"><strong>VEHICLE DETAILS</strong></caption>
			<thead id="headtable">
				<tr>
					<th>Date</th>
					<th>Customer Name</th>
					<th>Vehicle Number</th>
					<th>Mobile Number</th>
					<th>Arrived Time</th>
					
				</tr>
			</thead>
			<tbody>
				<form method="POST" action="view.php">
				<tr>
					<td><input type="text" name="date" value="" placeholder="YYYY-MM-DD"></td>
					<td><input type="text" name="cname" value="" placeholder="Name"></td>
					<td><input type="text" name="vehicle_number" value="" placeholder="Vehicle Number"></td>
					<td><input type="text" name="mobile_number" value="" placeholder="Mobile Number"></td>
					<td><input type="text" name="arrived_time" value="" placeholder="hh:mm"></td>
					
				
				</tr>
			</tbody>
		</table>
		<br>
			<input type="submit" value="Submit" id="submitbutton">
		</form>
				
		<br>
		
		
</div>	

</body>
</html>