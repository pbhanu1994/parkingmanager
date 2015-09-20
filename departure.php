<?php 
session_start();
	include("homeheader.php");
	include("nav.php");
	include("db.php");
 ?>
 <link rel="stylesheet" href="departure.css" />
 <title>DEPARTURE PAGE</title>
 <body>
 	<div id="maincontent">
 		<h1 id="departuretext">DEPARTURE</h1>
 		<h1 id="enter">ENTER VEHICLE NUMBER</h1>
 		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
 		
 			<input type="text" name="vehiclenumber" id="vehicleno" placeholder="eg:TN0123" />
 			<input type="submit" name="searchdeparture" id ="updatebutton" value="Search">
 		</form>
 		<br><br>
 		<table>
 			<caption>DEPARTURE VEHICLE</caption>
 			<thead>
 				<tr>
 					<th>id</th>
 					<th>Date</th>
 					<th>Customer Name</th>
 					<th>Vehicle Number</th>
 					<th>Mobile Number</th>
 					<th>Arrived Time</th>
 					<th>Cost</th>
 					<th>Departure Time</th>
 				</tr>
 			</thead>
 			<tbody>
 				
 		<?php 

 			if (isset($_POST['searchdeparture'])) {
 				$vehiclenumber = $_POST['vehiclenumber'];
 				
 			}
 			
 			
 			if (!empty($vehiclenumber)) {
 				$departurequery = mysql_query("SELECT id,Date,CustomerName,VehicleNumber,MobileNumber,ArrivedTime,Cost,DepartureTime FROM vehicle_details WHERE VehicleNumber = '$vehiclenumber'");
 				if (!$departurequery) {
 				die("Could not connect".mysql_error());
 			}
 				$rows = mysql_num_rows($departurequery);
 				if ($rows > 0) {
 					$array = mysql_fetch_assoc($departurequery);
 					

 				echo '<tr>';
 				echo	'<td>'.$array['id'].'</td>';
 				echo	'<td>'.$array['Date'].'</td>';
 				echo	'<td>'.$array['CustomerName'].'</td>';
 				echo	'<td>'.$array['VehicleNumber'].'</td>';
 				echo	'<td>'.$array['MobileNumber'].'</td>';
 				echo	'<td>'.$array['ArrivedTime'].'</td>';

 				echo '<form action="'.$_SERVER['PHP_SELF'].'" method = "POST">';
 				//echo '<form action="updatequery.php" method = "POST">';

 				echo	'<td><input type = "text" name = "cost" placeholder = "rs. "</td>';
 				echo	'<td><input type = "text" name = "departuretime" placeholder = "hr:mm" /></td>';
 				echo	'<td><input type = "text" name = "vehiclenumberforupdate" value='.$vehiclenumber.' hidden/></td>';
 				//echo 	'<td><input type="submit" name="update" id = "updatebutton1" value="UPDATE" /></td>';
 			//	echo	'<td>'.$array['DepartureTime'].'</td>';
 				echo '</tr>';
 				}

 				//if (isset($_POST['update'])) {
 				//	$cost = $_POST['cost'];
 				//	$departuretime = $_POST['departuretime'];

 				//}

 				
 				
 				//if (!empty($cost) || !empty($departuretime)) {
 				//	if(!empty($vehiclenumber)){
 				//	$updatequery = mysql_query("UPDATE vehicle_details SET Cost ='$cost' OR SET DepartureTime = '$departuretime' WHERE VehicleNumber = '$vehiclenumber' ");
 				//	}
 				//if (!$updatequery) {
 				//	die("Error Occured".mysql_error());
 				//}
 			//}
 			}
 			 ?>
 		 </tbody>
 		</table>
 		<input type="submit" name="update" id = "updatebutton1" value="UPDATE" />
 			<?php 
 			
					if (isset($_POST['update'])) {
 					$cost = $_POST['cost'];
					$departuretime = $_POST['departuretime'];
					$vehiclenumber = $_POST['vehiclenumberforupdate'];
				}
 					//echo $vehiclenumber.'<br>';
 					//echo $cost.'<br>';
 					//echo $departuretime;	
 				
 				if (!empty($cost) && !empty($departuretime)) {
 				if(!empty($vehiclenumber)){
 					
 					$updatequery = mysql_query("UPDATE vehicle_details SET Cost ='$cost' , DepartureTime = '$departuretime' WHERE VehicleNumber = '$vehiclenumber' ");
 					if (!$updatequery) {
 					die("Error Occured".mysql_error());
 					}
 					mysql_close();
 					}

 				
 			}
 		
 			 ?>
			
		</form>
 	</div>
 </body>

<?php 
if (condition) {
	# code...
}elseif (condition) {
	# code...
}
switch (variable) {
	case 'value':
		# code...
		break;
	
	default:
		# code...
		break;
}
 ?>

 if (isset($clickme)) {
					$id = "SELECT * FROM profile WHERE id="$who_id"";
					$query_id = mysql_query($id);
					$result = mysql_num_rows($query_id);
					
				if ($result == 1) {
					header("location:view.php?id="$id"");
				}else{
					die("Profile not found".mysql_error());
				}

				}


two

				if (isset($clickme)) {
					$name_view = "SELECT * FROM general WHERE id="$clickme"";
					 $query_name = mysql_query($name_view);
					 $result_name = mysql_num_rows($query_name);
					 if ($result_name == 1) {
					 	$name_find = mysql_fetch_array($name_view);
					 }
					 $id_find = $name_find['id'];
					$id_view = "SELECT * FROM general WHERE id="$id_find"";
					$query_id = mysql_query($id_view);
					$result = mysql_num_rows($query_id);
					$url_view = '../profile/view.php?id="$query_id"';
				if ($result == 1) {
					header("location:".$url_view);
				}else{
					exit();
				}

				}




three
				echo $who['name'];
				$clickme = $who['name'];
				if (isset($clickme)) {
					$name_view = "SELECT * FROM general WHERE id="$clickme"";
					 $query_name = mysqli_query($name_view);
					 $result_name = mysqli_num_rows($query_name);
					 if ($result_name == 1) {
					 	$name_find = mysqli_fetch_array($name_view);

					 	 $id_find = $name_find['id'];
					$id_view = "SELECT * FROM general WHERE id="$id_find"";
					$query_id = mysqli_query($id_view);
					$result = mysqli_num_rows($query_id);
					$url_view = '../profile/view.php?id="$query_id"';
				if ($result == 1) {
					header("location:".$url_view);
				}else{
					exit();
				}

					 	
					 }
					

				}