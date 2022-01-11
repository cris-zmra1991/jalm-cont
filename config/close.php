<?php
require 'base.php';
$database->update("users",["active" => "0"],["user_id" => $_SESSION['id_user']]);
session_destroy();
header('Location: '.RUTA.'index.php');
?>
