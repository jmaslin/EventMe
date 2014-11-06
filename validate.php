<?php

	session_start();
	
	include_once "connect.php";

	if (!isset($_SESSION['canScan'])) {
		$_SESSION['canScan'] = "";
	}

	// $_SESSION['canScan'] = true;
	// $_SESSION['canScan'] = false;

	if (isset($_GET['a'])) {

		echo $_SESSION['canScan'];
	}

	if (isset($_GET['id'])) {

		$validScanner = false;
		$_SESSION['canScan'] = false;

		$id = $_GET['id']; // TODO: Validate input

		$sql = 'SELECT * from Scanners WHERE idNumber = ' . $id;

		$result = $con->query($sql);

		if ($result->num_rows == 1) {
			$validScanner = true;
			$_SESSION['canScan'] = true;
		}

		else {
			$validScanner = false;
		}

		echo $validScanner;	

		// run login set session var

	}


?>