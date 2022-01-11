<?php
/**
 *
 */
class modelografico
{
  function TraerDatos()
  {
    $arreglo = array();
    $data = $database->select("users","*",["username" => $usuario]);
    if($consulta = $data){
      while ($consultaWU = mysqli_fetch_array($sonsulta)) {
        $arreglo[] = $consultaWU;
      }
      return $arreglo;
    }
  }
}

 ?>
