<?php
	/********/
	if(!defined('STARTED')) {
		header('Location: ../index.php');
		die();
	}
	/********/
	
	if( !isset($_POST['a_email']) || !isset($_POST['a_password']) ) {
		$this->executeView('admin_user');
	} else {
		
		$user = new User(false);
		
		if( $user->register($_POST['a_email'], $_POST['a_password']) ) {
			header('Location: index.php?a=admin');
		} else {
			$this->executeView('admin_user');
		}
	}
	
?>