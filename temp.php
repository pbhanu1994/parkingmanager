if (!empty($getalldata['Cost']) && !empty($getalldata['DepartureTime'])) {
					echo '<td class = "trow">'.$getalldata['Cost'].'</td>';
					echo '<td class = "trow">'.$getalldata['DepartureTime'].'</td>';
				}else{
					echo '<form action ="'.$_SERVER['PHP_SELF'].'" method = "POST">';
					echo '<td><input type="text" name="cost" placeholder= "Rs. "></td>';
					echo '<td><input type="text" name="departuretime" placeholder="hh:mm"></td>';
					echo '<td><input type = "submit" name = "costdeparturesubmit" value ="Submit" /></td>';
					echo '</form>';

					
				echo '</tr>';
				}
				<?php 
					if(isset($_POST['costdeparturesubmit'])){
					$cost = $_POST['cost'];	
					$departuretime = $_POST['departuretime'];
				}
					if(!empty($cost) || (!empty($departuretime)))
					$costdeparturequery = mysql_query("INSERT INTO vehicle_details (Cost,DepartureTime) VALUES ('$cost','$departuretime')");
				
					if (!costdeparturequery) {
						die("Error:".mysql_error());
					}
				}
				 ?>