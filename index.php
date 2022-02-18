<?php
require 'res/php/app_top.php';
$errores = "";
if(!isset($_SESSION['user'])){
	//REDIRIGIR Al PROCESO DE LOGIN
	header('Location: https://jalm-cont.herokuapp.com/acceso');
}
elseif(isset($_SESSION['user'])){
	//VERIFICAR EL TIPO DE USUARIO

}
else{
window.alert("A ocurrido un error. Recargue la página y vuelva a intentarlo");
}
?>
