<?php 
session_start();
	include ("db.php");
	include ("homeheader.php");
	include ("nav.php");	
		
 ?>
 <link rel="stylesheet" href="profileinfo.css" />
 <title>PROFILE PAGE</title>
<body>
<div id="admindetails">
	<h1>Admin Info</h1>
	<div>
		
		<table>
			<thead>
				<tr>
					<th colspan= ="2"></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><h2>First Name: </h2></td>
					<td><h2><?php echo $_SESSION['fname']; ?></h2></td>
				</tr>
				<tr>
					<td><h2>Last Name: </h2></td>
					<td><h2><?php echo $_SESSION['lname']; ?></h2></td>
				</tr>
				<tr>
					<td><h2>Gender: </h2></td>
					<td><h2><?php echo $_SESSION['gender']; ?></h2></td>
				</tr>
				<tr>
					<td><h2>Username: </h2></td>
					<td><h2><?php echo $_SESSION['username']; ?></h2></td>
				</tr>
				<tr>
					<td><h2>Email: </h2></td>
					<td><h2><?php echo $_SESSION['email']; ?></h2></td>
				</tr>
				<tr>
					<td><h2>Choose profile photo! </h2></td>
					<td>
					<div id="uploadfile">
						<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
							
							<input type="file" name="image" value="Choose File" /><br>
							<input type="submit" name="submitimage" value="Submit" />
			
						</form>
					</div>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
	
	
		
		<?php 
		if (!empty($_FILES['image'])) {
				
				$filename = $_FILES['image']['name'];
				$filesize = $_FILES['image']['size']; //2097152
				$filetype = $_FILES['image']['type'];
				$filetemp = $_FILES['image']['tmp_name'];
				$showpic = file_get_contents($filetemp);
				$fileerror = $_FILES['image']['error'];
				
				$location = 'uploads/';
				$max_size = 2097152;
		
				$extension = substr($filename, strpos($filename, '.') +1);
				//echo $filetype .'<br>';
				//echo $extension;
		}
		
		
		
			if (!empty($filename)) {
				if ($filetype == 'image/jpeg' && $extension == 'jpg' || $extension == 'jpeg' && $filesize <= $max_size) {
				
					$email = $_SESSION['email'];
					

					$update_image_query = mysql_query("UPDATE registration SET imagename = '$filename' , imagedata = `$showpic` WHERE email = '$email' ");
					
					if(!$update_image_query){
						die("Image Update Failed".mysql_error());
					}else{
						echo "Uploaded Successfully!";
					}

					$show_image_query = mysql_query("SELECT imagedata FROM registration WHERE email = '$email'");
					if (!$show_image_query) {
							die("Error Occured".mysql_error());
						}
						

						$imagerow = mysql_fetch_assoc($show_image_query);
						$showimage = $imagerow['imagedata'];

						 //$showpic = $showimage;
							if (!empty($showimage)) {
								echo "'<img src='$showimage' />'";
							}else{
								echo "Image cannot be shown";
							}
							
						
						
				if(move_uploaded_file($filetemp, $location.$filename)){
					echo "Uploaded Successfully!";
					//echo "<img src= 'uploads/$filename' />";
				}else{
				echo "There was an error";
				}
			}else{
				echo "The file should be in jpg format and the size of the file must be below 2mb";
			}

		}else{
			echo "Please choose a file to upload";
		}

	 ?>
	<div >
		<a href="homescreen.php"><img src="images/back.png" alt="BACK" id="backbutton"></a>
	</div>
	</div>
</body>