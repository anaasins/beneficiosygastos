<?php
/**
 * Clase para consultas y conexion con la base de datos de ventas y gastos. Ana Asins.
 */
class VentasGastos
{
  private $mysqli;
  private $error=false;
  function __construct()
  {
    $this->mysqli= new mysqli("localhost", "root", "", "ventasgastos");
    if ($this->mysqli->connect_errno) {
      $this->error=true;
    }
  }
  public function geterror(){
    return $this->error;
  }

  public function ventas($semana){
    return $venta=$this->mysqli->query("SELECT venta FROM ventas WHERE num_semana='" .$semana ."'");
  }

  public function gastos($semana){
    return $gasto=$this->mysqli->query("SELECT gasto FROM gastos WHERE num_semana='" .$semana ."'");
  }
}

 ?>
