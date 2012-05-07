<?php
	/********/
	if(!defined('STARTED')) {
		header('Location: ../index.php');
		die();
	}
	/********/
	
	include_once('header.view.php');
	include_once('sidebar_admin.view.php');
?>		<section id="main">
			<h2>Staszic Delta Admin</h2>
			<h3><-- Adminuj adminie!</h3>
		</section>
<?php include_once('footer.view.php'); ?>