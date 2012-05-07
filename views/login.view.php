<?php
	/********/
	if(!defined('STARTED')) {
		header('Location: ../index.php');
		die();
	}
	/********/
	
	include_once('header.view.php');
	include_once('sidebar_notlogged.view.php');
?>		<section id="main">
			<h2>Staszic Delta</h2>
			<h3>Zaloguj się!</h3>
			<?php if( isset($this->params['error']) ) { 
				echo '<div id="error">'.$this->params['error'].'</div>';
			} ?>
			<form action="index.php?a=login" method="post" >
				<div class="field"><label for="email">Login:</label><input type="email" id="email" name="email"></div>
				<div class="field"><label for="pass">Hasło:</label><input type="password" id="pass" name="pass"></div>
				<div class="field"><input type="submit" value="Loguj!"></div>
			</form>
		</section>
<?php include_once('footer.view.php'); ?>