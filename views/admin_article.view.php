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
			<h3>Dodaj artykuł</h3>
			<form action="index.php?a=acat" method="post" >
				<div class="field"><label for="b_title">Tytuł:</label><input type="text" id="b_title" name="b_title"></div>
				<div class="field"><label for="b_category">Kategoria:</label><input type="text" id="b_category" name="b_category"></div>
				<div class="field"><label for="b_body">Treść:</label><input type="text" id="b_body" name="b_body"></div>
				<div class="field"><input type="submit" value="Dodaj!"></div>
			</form>
		</section>
<?php include_once('footer.view.php'); ?>