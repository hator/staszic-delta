<?php
	ob_start();
	/**
	* @author Jan Michalski
	* @date 2012-03-18
	*/
	
	session_start();
	
	define("STARTED", true);
	
	define('BASEPATH', str_replace("\\",'/',dirname(__FILE__)).'/');
		
	require_once('config/site.config.php');
	require_once('config/database.config.php');
	require_once('config/routing.config.php'); // main routing table
	
	require_once('core/dbmanager.class.php');
	
	require_once('core/sitecontroller.class.php');
	
	require_once('core/validator.class.php');
	
	require_once('core/user.class.php');
		
	$site = new SiteController();
		
	
	if( !isset($_SESSION['user'])) {	// if user is not logged in
		$action = 'login';
	} elseif( !isset($_GET['a']) )	{ 
		$action = 'main'; // if you don't know, where to direct user, direct him to main page
	} else {
		$action = $_GET['a']; // direct him where he wants
	}
	
	if( isset($ROUTING_ADMIN[$action]) ) {
		print_r($user = new User());
		if( $user->admin ) {
			$controller = $ROUTING_ADMIN[$action];
		} else {
			$controller = $ROUTING['error'];
			$site->setParam('error', '403');
		}
	} elseif( !isset( $ROUTING[$action] ) ) {
		$controller = $ROUTING['error']; // if site does not exist, show error
		$site->setParam('error', '404');
	} else {
		$controller = $ROUTING[ $action ];
	}
	
	$site->executeController( $controller );
	
	ob_end_flush();
?>
