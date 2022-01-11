<?php
  $data = $database->select("users","*",["username" => $usuario]);
  $arreglo = array();
  while($grafico = mysqli_fetch_array($data)){
    $arreglo[] = $grafico;
  }
  return $arreglo;
  echo json_encode($arreglo);
?>
