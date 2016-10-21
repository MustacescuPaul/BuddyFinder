<?php
session_start();
error_reporting(0);



$DB_HOST = 'localhost';
$DB_USER = 'root';
$DB_PASS = '';
$DB_NAME = 'buddyfinder';

try{
	$DB_con = new PDO("mysql:host={$DB_HOST};dbname={$DB_NAME}",$DB_USER,$DB_PASS);
	$DB_con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
}
catch(PDOException $e){
	echo $e->getMessage();
}


// Requiring the functions
require_once('core-functions.php');
// Requiring the classes
require_once('classes.php');
// Requiring the initiator 
require_once('init.php');


