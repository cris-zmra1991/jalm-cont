<?php
require 'modelografico.php';
$MG = new modelografico();
$consulta = $MG -> TraerDatos();
echo json_encode($consulta);
 ?>
