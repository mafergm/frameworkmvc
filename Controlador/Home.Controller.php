<?php
  /**
   * Clase home que permite la primera carga del sistema
   */
  class Home
  {

    function __construct()
    {
      // code...
    }

    public function Inicio()
    {
       $smarty = new Smarty();
       $smarty->display('Default.tpl');
    }

    public function Funciondos()
    {
        $m = new Usuarios();
        $c = $m->busqueda("usuario", 456);
        //var_dump($c);
    }
  }

 ?>
