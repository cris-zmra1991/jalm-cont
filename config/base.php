<?php
session_start();
define('RUTA', 'http://localhost:8030/full-sys/');
require 'medoo.php';
use Medoo\Medoo;
try {
  $database = new Medoo([
  	// [required]
  	'type' => 'mysql',
  	'host' => 'localhost',
  	'database' => 'cp',
  	'username' => 'root',
  	'password' => '',
   ]);
} catch (PDOException $e) {
  echo "No se pudo conectar a la Base de Datos MYSQL";
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
