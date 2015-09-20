<?php 
			$link = mysql_connect('localhost','root','');
			if (!$link) {
				die("could not connect". mysql_error());
			}
			
			$db_selected = mysql_select_db('parkingmanager',$link);
			if (!$db_selected) {
				die("Can't use ". parkingmanager."!".mysql_error());
			}
?>