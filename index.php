<?php
require 'config/base.php';
// comprobar session
if (isset($_SESSION['usuario'])) {
  // validar los datos por privilegio
  $data = $database->count("users",["username" => $_SESSION['usuario']]);

  if ($data == '1') {
    header('Location: '.RUTA.'user/user.php');
    }
    else {
    header('Location: '.RUTA.'login/login.php');
    }
}else {
header('Location: '.RUTA.'login/login.php');
}
?>
