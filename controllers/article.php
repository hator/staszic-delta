<?php
	/********/
	if(!defined('STARTED')) {
		header('Location: ../index.php');
		die();
	}
	/********/
	
	// TODO check this query
	@$result = DBManager::instance()->query('SELECT `title`,`body` FROM `articles` WHERE `id`='.Validator::SqlInjection($_GET['id']));
	
	if( $result && (@$result->num_rows > 0) ) {
		$article = $result->fetch_assoc();
		
		$this->params['art_title'] = $article['title'];
		$this->params['art_body'] = Validator::HTMLdecode($article['body']);
		
		$this->executeView('article');
	} else {
		header("Location: index.php");
	}
	
?>