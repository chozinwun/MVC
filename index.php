<?php
	/*
		Title: Simple PHP Framework
		Author: Marcus Battle
		Date: August 8, 2012
		Company: Marco Productions
	*/
	
	/*** define the site path ***/
	$site_path = realpath(dirname(__FILE__));
	define ('__SITE_PATH', $site_path);
	
	/*** include the init.php file ***/
	include 'app/settings/init.php';
	include 'app/settings/config.php';
	
	/*** load the router ***/
	$registry->router = new router($registry);
	
	/*** set the controller path ***/
	$registry->router->setPath (__SITE_PATH . '/mvc/controllers');
	
	/*** load up the template ***/
	$registry->template = new template($registry);
	
	session_start();
	
	/*** load the controller ***/
	$registry->router->loader();

?>
