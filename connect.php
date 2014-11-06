<?php

	$dbHost = "localhost";
	$dbUser = "root";
	$dbPass = "";
	$dbName = "scanDev";

	$con = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

	if ($con->connect_error) {
		trigger_error("Cannot connect: " . $con->connect_error, E_USER_ERROR);
	}

	// createTables($con);

	function createTables($con) {

		$sql = 'CREATE TABLE IF NOT EXISTS Scanners 
			(id INT PRIMARY KEY NOT NULL, idNumber INT(128))';

		if (!$con->query($sql)) {
			echo "Table creation failed.";
		}

		else {
			echo "Table created!";
		}
	}

?>