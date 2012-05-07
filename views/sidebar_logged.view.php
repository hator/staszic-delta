<?php
	/********/
	if(!defined('STARTED')) {
		header('Location: ../index.php');
		die();
	}
	/********/
	
	$db = DBManager::Instance();
	$result = $db->query("SELECT `id`,`title` FROM `categories` WHERE `parent`=0");
	
?>		<script src="media/js/ajax_menu.js"></script>
		<section id="sidebar">
			<a id="bulb"></a>
			<ul id="categories">
				<li><a href="index.php?a=logout">Wyloguj się!</a></li>
				<?php while( $a = $result->fetch_assoc() ) {
					echo '<li class="category" id="'.$a['id'].'">' . $a['title'] . '</li>';
				} ?>
			</ul>
		</section>
