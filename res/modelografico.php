<?php
/**
 *
 */
class modelografico
{
  private $conexion;
  function __construct()
  {
    require_once 'conexion.php';
    $this->conexion = new conexion();
    $this->conexion->conectar();
  }
  function TraerDatos()
  {
    $sql = "SELECT * FROM users";
    $arreglo = array();
    if($consulta = $this->conexion->query($sql))
    {
      while ($consultaWU = mysqli_fetch_array($sonsulta)) {
        $arreglo[] = $consultaWU;
      }
      return $arreglo;
      $this->conexion->cerrar();
    }
  }
}

 ?>
