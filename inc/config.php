<?php 

	// If there is no constant defined called __CONFIG__, do not load this file 
	if(!defined('_CONFIG_')) {
		exit('You do not have a config file');
	}

if(!isset($_SESSION)) {
	session_start();
}
    error_reporting(-1);
    ini_set('display_error',"On");     

	// Our config is below
	// Include the DB.php file;
	include_once "classes/DB.php";
    include_once "classes/filter.php";
    include_once "function.php";
	$con = DB::getConnection();

?>