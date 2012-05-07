<?php
	/********/
	if(!defined('STARTED')) {
		header('Location: ../index.php');
		die();
	}
	/********/

?>		<section id="sidebar">
			<a id="bulb"></a>
			<ul id="categories">
				<li><a href="index.php?a=logout">Wyloguj się!</a></li>
				<li><a href="index.php">Strona główna</a></li>
				<li><a href="index.php?a=auser">Zarządzanie userami</a></li>
				<li><a href="index.php?a=aart">Zarządzanie artykułami</a></li>
				<li><a href="index.php?a=acat">Zarządzanie kategoriami</a></li>
			</ul>
		</section>
