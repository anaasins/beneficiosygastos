<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Beneficios semana 2</title>
  </head>
  <body>
    <?php
    include 'basedatos.php';
    $ventasgastos=new VentasGastos();
    //sacamos las ventas
    if ($ventasgastos->geterror()==false) {
      $venta=$ventasgastos->ventas(2);
      $ventas2=0;
      while ($fila=$venta->fetch_assoc()) {
        $ventas2+=$fila["venta"];
       }
       //sacamos los gastos
         $gasto=$ventasgastos->gastos(2);
         $gastos2=0;
         while ($fila=$gasto->fetch_assoc()) {
           $gastos2+=$fila["gasto"];
          }
          //calculamos los beneficios
      $beneficios2=$ventas2-$gastos2;
      echo "Beneficios primera semana: " .$beneficios2;
    }
     ?>
  </body>
</html>
