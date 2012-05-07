<?php
	/********/
	if(!defined('STARTED')) {
		header('Location: ../index.php');
		die();
	}
	/********/
	
	$this->required('core/user.class.php');
	
	if( isset($_SESSION['user']) ) {
		
		header('Location: index.php');
		
	} else {
		
		if( !isset($_POST['email']) || !isset($_POST['pass'])) { 
			
			$this->executeView('login');
			
		} else {
			
			$user = new User();	
			
			$result = $user->login($_POST['email'],$_POST['pass']);
			
			if( $result == 1) {
				header('Location: index.php');
			} else {
				$this->setParam('error', $result);
				$this->executeView('login');
			}
			
		}
	}

?>