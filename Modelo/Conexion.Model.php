<?php
  /**
   *
   */
  class Conexion extends mysqli
  {

    function __construct()
    {
      // code...
      $server="localhost";
      $pass="";
      $user="root";
      $base="datos";

      parent::__construct($server,$user,$pass,$base);
      $this->query("SET NAMES 'utf8';");
      $this->connect_errno ? die('Error en la conexion de la base de datos.') : $error="<br><br>";
      echo $error;
	  unset($error);
    }
  }

 ?>
