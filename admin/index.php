<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin Dashboard</title>
</head>
<body>
<?php 
if(isset($_SESSION['user']) && $_SESSION['role'] == "Administrador"){
	require 'res/php/admin_nav.php';
}
elseif(isset($_SESSION['user']) && $_SESSION['role'] == "Administrador" && !isset($_GET['section'])){
	require 'views/welcome.php';
}
else{
	header('Location: http://localhost:8030/new-app/acceso');
}
?>
	<h1>Prueba</h1>
</body>
</html>