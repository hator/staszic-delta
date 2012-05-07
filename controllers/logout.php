<?php
	/********/
	if(!defined('STARTED')) {
		header('Location: ../index.php');
		die();
	}
	/********/
		
	if( isset($_SESSION['user']) ) {
		unset($_SESSION['user']);
		session_destroy();
	}
	
	header('Location: index.php');
	
?>
	
