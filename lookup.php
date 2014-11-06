<?php
	
	$lookupId = $_GET['id']; // MAKE SURE SAFE INPUT

	// PERFORM LOOKUP VIA ID NUMBER
	// RETURN TRUE OR FALSE
	// IF TRUE, RETURN NAME, TICKET TYPE, ANY GUEST TICKETS

	class User {

		public $id;
		public $name;
		public $ticketStatus;
	}


	$thisUser = new User;

	$thisUser->id = $lookupId;
	$thisUser->name = "Justin";
	$thisUser->ticketStatus = "regular";


	echo json_encode($thisUser);

?>