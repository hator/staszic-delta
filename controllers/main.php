<?php
	/********/
	if(!defined('STARTED')) {
		header('Location: ../index.php');
		die();
	}
	/********/


	$this->executeView('main');
	
?>