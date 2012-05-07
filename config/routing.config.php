<?php

	/**
	* @author Jan Michalski
	* @date 2012-03-18
	* @file routing.php
	* @desc Main routing table
	*/

	$ROUTING = array(
	/* syntax:
		name => file ( without ".php")
	*/
		// errors
		"error" => "error",
		
		// not logged
		"login" => "login",
		
		// logged
		"main" => "main",
		"logout" => "logout",
		"category" => "category",
		"article" => "article",
		
	);
	
	$ROUTING_ADMIN = array(
		"auser" => "admin_user",
		"aart" => "admin_article",
		"acat" => "admin_category",
		
		"admin" => "admin",
		
	);
	
?>