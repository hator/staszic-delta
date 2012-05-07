<?php
	header('Content-Type: application/json');
	header('Charset: utf-8');
	
	echo "{\n";
	
	/***************/
	@$result = DBManager::instance()->query('SELECT `id`,`title` FROM `categories` WHERE `parent`='.Validator::SqlInjection($_GET['id']));
	
	if( $result && (@$result->num_rows > 0) ) {
		echo '"categories": [';
	
		if($category = $result->fetch_assoc())
			echo '{"id": "'.$category['id'].'", "title": "'.$category['title'].'"}';
		
		while($category = $result->fetch_assoc()) {
			echo ',{"id": "'.$category['id'].'", "title": "'.$category['title'].'"}';
		}	
		
		echo ']';
		
		$flag = true;
	}
	
	/**************/
	@$result = DBManager::instance()->query('SELECT `id`,`title` FROM `articles` WHERE `category`='.Validator::SqlInjection($_GET['id']));
	
	if( $result && (@$result->num_rows > 0) ) {
		if(isset($flag)&&$flag)
			echo ',';
		
		echo '"articles": [';
	
		if($article = $result->fetch_assoc())
			echo '{"id": "'.$article['id'].'", "title": "'.$article['title'].'"}';
		
		while($article = $result->fetch_assoc()) {
			echo ', {"id": "'.$article['id'].'", "title": "'.$article['title'].'"}';
		}	
		
		echo ']';
		
	}
	/****************/
	echo "\n}";
	
	
?>
