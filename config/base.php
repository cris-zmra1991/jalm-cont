<?php
session_start();
define('RUTA', 'https://jalm-cont.herokuapp.com/');
require 'medoo.php';
use Medoo\Medoo;
try {
  $database = new Medoo([
  	// [required]
  	'type' => 'mysql',
  	'host' => 'bcb1jafhad9xmqsnbupc-mysql.services.clever-cloud.com',
  	'database' => 'bcb1jafhad9xmqsnbupc',
  	'username' => 'uayidyqxhmbs6tou',
  	'password' => 'pCGODmqE77EWQxEFQwWZ',
   ]);
} catch (PDOException $e) {
  $errorconexion = $e;
}

//try {
//  $databasesql = new Medoo([
//  	// [required]
//  	'type' => 'mssql',
//  	'host' => '172.19.134.137',
//  	'database' => 'UEB_3522E_INT',
//  	'username' => 'sa',
//  	'password' => 'Sql2012*',
//   ]);
//} catch (PDOException $e) {
  //echo "No se pudo conectar a la Base de Datos de ASSETS";
//}
 ?>
