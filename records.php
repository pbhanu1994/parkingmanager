<?php 
session_start();

	include ("homeheader.php");
	include ("nav.php");
	include ("db.php");
	
	$alldates = mysql_query("SELECT DISTINCT Date FROM vehicle_details");

 ?>
<title>RECORDS PAGE</title>
 <link rel="stylesheet" href="records.css" />

 <body>

 	<div id="maincontent">
<h2 id="selectdate">
	Note: Select a Date and click on submit or search for an item.
</h2>

 		<form action="<?php echo $_SERVER['PHP_SELF']; ?>"  method="POST">
 			
 		<select name="records" id="select">
 			<option value="Select Date"> </option>
 		<?php 
 			while ($rows = mysql_fetch_assoc($alldates)) {
 				$dateoption = $rows['Date'];
 				//echo '<option value = $dateoption>'.$dateoption.'</option>';
 				//echo '<option value =' $dateoption'>'.$dateoption.'</option>';
 				echo '<option value = '.$dateoption.'>'.$dateoption.'</option>';
 			}
		 ?>
		 <input type="submit" name="submit" id ="searchdate" value="submit" />
		</select>
		</form>
		<img src="images/sbicon.png" alt="SEARCH_ICON" id="searchicon" />
		
		<div id="serachfield">
			<label>SEARCH</label>

		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" >
 			<input type="text" name="search" value=" " placeholder="Search" />
 			<input type="submit" name="searchbutton" value="Search" />
 		</form>
	</div>
	<!-- For Search Button -->
	<?php 
		if (isset($_POST['searchbutton'])) {
			$searchitem = $_POST['search'];
		
			if (!empty($searchitem)) {	
				echo '<h1>Search Results for: '.$searchitem.'</h1>';
				$searchquery = mysql_query("SELECT id,Date,CustomerName,VehicleNumber,MobileNumber,ArrivedTime,Cost,DepartureTime FROM vehicle_details WHERE (id LIKE '%$searchitem%' OR Date LIKE '%$searchitem%' OR CustomerName LIKE '%$searchitem%' OR VehicleNumber LIKE '%$searchitem%' OR MobileNumber LIKE '%$searchitem%' OR ArrivedTime LIKE '%$searchitem%' OR Cost LIKE '%$searchitem%' OR DepartureTime LIKE '%$searchitem%')");
		
			if (!$searchquery)
				die("No Results".mysql_error());
			}
		}
		 ?>

<?php 										

	if (isset($_POST['submit'])) {
		$printrecords = $_POST['records'];
	}
	if (!empty($printrecords)) {
		echo'<h1> Chosen Date is: '.$printrecords.'</h1>';
		$query = mysql_query("SELECT id,Date,CustomerName,VehicleNumber,MobileNumber,ArrivedTime,Cost,DepartureTime FROM vehicle_details WHERE Date = '$printrecords' ORDER BY id");
		
		if (!$query) {		
 		die("Could Not Connect".mysql_error());
 		}
	}
 ?>

		<table>
			<caption><strong>RECORDS</strong></caption>
			<thead>
				<tr>
					<th class="thead">ID</th>
					<th class="thead">Date</th>
					<th class="thead">Customer Name</th>
					<th class="thead">Vehicle Number</th>
					<th class="thead">Mobile Number</th>
					<th class="thead">Arrived Time</th>
					<th class="thead">Cost</th>
					<th class="thead">Departure Time</th>
					
				</tr>
			</thead>

			<tbody>

			<?php 

			if (isset($_POST['submit'])) {
					while($getalldata = mysql_fetch_assoc($query)){ 
						echo '<tr>';
							echo	'<td class="trow">'.$getalldata['id'].'</td>';
							echo	'<td class="trow">'.$getalldata['Date'].'</td>';
							echo	'<td class="trow">'.$getalldata['CustomerName'].'</td>';
							echo	'<td class="trow">'.$getalldata['VehicleNumber'].'</td>';
							echo	'<td class="trow">'.$getalldata['MobileNumber'].'</td>';
							echo	'<td class="trow">'.$getalldata['ArrivedTime'].'</td>';
							echo	'<td class="trow">'.$getalldata['Cost'].'</td>';
							echo	'<td class="trow">'.$getalldata['DepartureTime'].'</td>';
						echo '</tr>';
					echo '</tbody>';
					
					
					}
				}
			
			

				if (isset($_POST['searchbutton'])) {
					while($getalldata1 = mysql_fetch_assoc($searchquery)){ 
						echo '<tr>';
							echo	'<td class="trow1">'.$getalldata1['id'].'</td>';
							echo	'<td class="trow1">'.$getalldata1['Date'].'</td>';
							echo	'<td class="trow1">'.$getalldata1['CustomerName'].'</td>';
							echo	'<td class="trow1">'.$getalldata1['VehicleNumber'].'</td>';
							echo	'<td class="trow1">'.$getalldata1['MobileNumber'].'</td>';
							echo	'<td class="trow1">'.$getalldata1['ArrivedTime'].'</td>';
							echo	'<td class="trow1">'.$getalldata1['Cost'].'</td>';
							echo	'<td class="trow1">'.$getalldata1['DepartureTime'].'</td>';
						echo '</tr>';
					echo '</tbody>';
					
						//echo '</tr>';
					}
				}

				
				?>

			
		</table>

 		<!-- <select name="alldate">
 		 
 		 <?php 
 		 	//for($i=0; $i < $lenghtofdates; $i++){
 		 	//	$rows = mysql_fetch_assoc($alldates);
 		 	//	$dateoptions = $rows['Date'];
 				//	echo '<option>'.$dateoptions.'</option>';
 			//}
 		  ?>
 		  </select>-->
		
 	</div>
 </body>