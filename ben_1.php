<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Beneficios semana 1</title>
  </head>
  <body>
    <?php
    include 'basedatos.php';
    $ventasgastos=new VentasGastos();
      //sacamos las ventas
    if ($ventasgastos->geterror()==false) {
      $venta=$ventasgastos->ventas(1);
      $ventas1=0;
      while ($fila=$venta->fetch_assoc()) {
        $ventas1+=$fila["venta"];
       }
        //sacamos los gastos
         $gasto=$ventasgastos->gastos(1);
         $gastos1=0;
         while ($fila=$gasto->fetch_assoc()) {
           $gastos1+=$fila["gasto"];
          }
          //calculamos el beneficio
      $beneficios1=$ventas1-$gastos1;
      echo "Beneficios primera semana: " .$beneficios1;
    }
     ?>
  </body>
</html>
