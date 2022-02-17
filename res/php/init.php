<?php
session_start();
require 'medoo.php';
// Using Medoo namespace.
use Medoo\Medoo;
// Database connection
$database = new Medoo([
	// [required]
	'type' => 'mysql',
	'host' => 'localhost',
	'database' => 'new-app',
	'username' => 'root',
	'password' => ''
]);
?>