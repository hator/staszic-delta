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
			<h3>Dodaj kategoriê</h3>
			<form action="index.php?a=acat" method="post" >
				<div class="field"><label for="c_title">Nazwa:</label><input type="text" id="c_title" name="c_title"></div>
				<div class="field"><label for="c_parent">Rodzic:</label><input type="text" id="c_parent" name="c_parent"></div>
				<div class="field"><input type="submit" value="Dodaj!"></div>
			</form>
		</section>
<?php include_once('footer.view.php'); ?>