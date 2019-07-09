<?php

    $mysqli = new mysqli("localhost", "root", "", "new_schema");

    if (mysqli_connect_errno()) {
		echo 'Connection error :'.mysqli_connect_errno();
		exit();
	}	
?>