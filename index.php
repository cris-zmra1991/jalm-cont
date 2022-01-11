<?php
require 'config/base.php';
// comprobar session
if (isset($_SESSION['usuario'])) {
  // validar los datos por privilegio
  $data = $database->count("users",["username" => $_SESSION['usuario']]);

  if ($data == '1') {
    header('Location: '.RUTA.'panel/user.php');
    }
    else {
    header('Location: '.RUTA.'panel/login.php');
    }
}else {
header('Location: '.RUTA.'panel/login.php');
}
?>
