<?php
session_start();
	include_once("db.php");

	$loginuseremail = $_POST['loginemail'];
	$loginpass = $_POST['loginpassword'];
	$sql = mysql_query("SELECT * FROM registration WHERE (email ='$loginuseremail' OR username ='$loginuseremail' AND password = '$loginpass')");
				
			$result = mysql_num_rows($sql);
			if ($result > 0){ 

				header("Location:homescreen.php");

				$rows = mysql_fetch_array($sql);

				
				$id = $rows['id'];
				$_SESSION['id'] = $id;

				$fname = $rows['fname'];
				$_SESSION['fname'] = $fname;

				$lname = $rows['lname'];
				$_SESSION['lname'] = $lname;

				$gender = $rows['sex'];
				$_SESSION['gender'] = $gender;

				$username = $rows['username'];
				$_SESSION['username'] = $username;

				$password = $rows['password'];
				$_SESSION['password'] = $password;

				$email = $rows['email'];
				$_SESSION['email'] = $email;
			}
			else
				
				header("Location:index.php");
				
		?>
			