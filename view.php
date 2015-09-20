<?php
session_start();
 	include("homeheader.php");
	include("nav.php"); 

	$date = $_POST['date'];
	$_SESSION['date'] = $date;

	$cname = $_POST["cname"];
	$_SESSION['cname'] = $cname;

	$vnumber = $_POST['vehicle_number'];
	$_SESSION['vnumber'] = $vnumber;

	$mnumber = $_POST['mobile_number'];
	$_SESSION['mnumber']  = $mnumber;

	$atime = $_POST['arrived_time'];
	$_SESSION['atime'] = $atime;
?>

<link rel="stylesheet" href="view.css">
<body>
<div id="maincontent">

	<div id="getinfo">
	
	<table id="table">
			<caption id="detailstext"><strong>VEHICLE DETAILS</strong></caption>
			<thead id="headtable">
				<tr>
					<th class="theadtext">Date</th>
					<th class="theadtext">Customer Name</th>
					<th class="theadtext">Vehicle Number</th>
					<th class="theadtext">Mobile Number</th>
					<th class="theadtext">Arrived Time</th>
					
				</tr>
			</thead>
			<tbody id="tbody">
				<tr>
				<td class="tbodytext"><?php echo $date; ?></td>
					<td class="tbodytext"><?php echo $cname; ?></td>
					<td class="tbodytext"><?php echo $vnumber; ?></td>
					<td class="tbodytext"><?php echo $mnumber; ?></td>
					<td class="tbodytext"><?php echo $atime; ?></td>
				</tr>
			</tbody>
		</table>

		<a href="save.php"><input type="submit" name="save" value="SAVE" id="savebutton"></a>
		<a href="file.php"><input type="submit" name="back" value="BACK" id="backbutton"></a>
		
	</div>
	<br>
	<div id="viewdetails">
	<h2 id="records">Click Below to View The Records</h2>
		<a href="records.php" title="VIEW_DETAILS"><img src="images/view.png" alt="View_Details" id="viewpng"></a>
	</div>
</div>

</body>