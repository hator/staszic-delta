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
			<h3><- Przeglądaj materiały:</h3>
			<p><a href="">Źródła projektu</a></p>
		</section>
<?php include_once('footer.view.php'); ?>