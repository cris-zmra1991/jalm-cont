<?php
session_start();
require 'medoo.php';
// Using Medoo namespace.
use Medoo\Medoo;
// Database connection
$database = new Medoo([
	// [required]
	'type' => 'mysql',
	'host' => 'bcb1jafhad9xmqsnbupc-mysql.services.clever-cloud.com',
	'database' => 'bcb1jafhad9xmqsnbupc',
	'username' => 'uayidyqxhmbs6tou',
	'password' => 'pCGODmqE77EWQxEFQwWZ'
]);
?>
