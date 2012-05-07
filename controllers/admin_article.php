<?php
	/********/
	if(!defined('STARTED')) {
		header('Location: ../index.php');
		die();
	}
	/********/
	
	if( !isset($_POST['b_title']) || !isset($_POST['b_category']) || !isset($_POST['b_body'])) {
		$this->executeView('admin_article');
	} else {
		
		@$result = DBManager::instance()->query('INSERT INTO `articles` (`id`,`title`,`category`, `body`) VALUES (NULL, '.Validator::SqlInjection($_POST['b_title']).', '.Validator::SqlInjection($_POST['b_category']).', '.Validator::HTML($_POST['b_body']).')');
		
		if( $result && ($result->num_rows > 0) ) {
			header('Location: index.php?a=admin');
		} else {
			$this->executeView('admin_article');
		}
	}
	
?>