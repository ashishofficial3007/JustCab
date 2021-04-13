<?php

	$mysqli = new mysqli('localhost','root','','justgetit');
	if ($mysqli->connect_error){
		die('connect error('.$mysqli->connect_errno.')'
		.$mysqli->connect_error);
		echo $mysqli;
	}
?>