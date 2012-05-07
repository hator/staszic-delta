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
			<h3>Dodaj usera</h3>
			<form action="index.php?a=auser" method="post" >
				<div class="field"><label for="a_email">Login:</label><input type="email" id="a_email" name="a_email"></div>
				<div class="field"><label for="a_password">Has³o:</label><input type="password" id="a_password" name="a_password"></div>
				<div class="field"><input type="submit" value="Dodaj!"></div>
			</form>
		</section>
<?php include_once('footer.view.php'); ?>