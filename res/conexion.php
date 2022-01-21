<?php
  /**
   *
   */
  class conexion
  {
    private $server;
    private $user;
    private $password;
    private $bdatos;
    public $conexion;

    public function __construct()
    {
      $this->server = "bcb1jafhad9xmqsnbupc-mysql.services.clever-cloud.com";
      $this->user = "uayidyqxhmbs6tou";
      $this->password = "pCGODmqE77EWQxEFQwWZ";
      $this->bdatos = "bcb1jafhad9xmqsnbupc";
    }
    function conectar()
    {
      $this->conexion = new mysqli($this->server,$this->user,$this->password,$this->bdatos);
      $this->conexion->set_charset("utf8");
    }
    function cerrar(){
      $this->conexion->close();
    }
    public function query()
        {
        return $this->conexion->query();
        }
  }

 ?>
