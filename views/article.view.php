<?php
	/********/
	if(!defined('STARTED')) {
		header('Location: ../index.php');
		die();
	}
	/********/
	
	include_once('header.view.php');
	include_once('sidebar_logged.view.php');
?>		<section id="main">
			<h2>Staszic Delta</h2>
			<h3><?php echo $this->params['art_title']; ?></h3>
			<div id="article_content"><?php echo $this->params['art_body']; ?></div>
		</section>
<?php include_once('footer.view.php'); ?>