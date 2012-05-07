<?php
	/********/
	if(!defined('STARTED')) {
		header('Location: ../index.php');
		die();
	}
	/********/
	
	if( !isset($_POST['c_title']) || !isset($_POST['c_parent']) ) {
		$this->executeView('admin_category');
	} else {
		
		@$result = DBManager::instance()->query('INSERT INTO `categories` (`id`,`title`,`parent`) VALUES (NULL, '.Validator::SqlInjection($_POST['c_title']).', '.Validator::SqlInjection($_POST['c_parent']).')');
		
		if( $result && ($result->num_rows > 0) ) {
			header('Location: index.php?a=admin');
		} else {
			$this->executeView('admin_category');
		}
	}
	
?>