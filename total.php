<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Total ventas y gastos por semana</title>
  </head>
  <body>
    <?php
      include 'basedatos.php';
      $ventasgastos=new VentasGastos();

      if ($ventasgastos->geterror()==false) {
        echo "<h2>SEMANA 1: </h2>";
        //venta semana 1
          $venta=$ventasgastos->ventas(1);
          $columna=0;
          while ($fila=$venta->fetch_assoc()) {
            $columna+=$fila["venta"];
           }
           echo "Ventas: " .$columna ."<br>";

           //gastos semana 1
           $gasto=$ventasgastos->gastos(1);
           $columna=0;
           while ($fila=$gasto->fetch_assoc()) {
             $columna+=$fila["gasto"];
            }
            echo "Gastos: " .$columna ."<br><hr>";

            echo "<h2>SEMANA 2: </h2>";
            //ventas semana 2
            $venta=$ventasgastos->ventas(2);
            $columna=0;
            while ($fila=$venta->fetch_assoc()) {
              $columna+=$fila["venta"];
             }
             echo "Ventas: " .$columna ."<br>";

             //gastos semana 2
             $gasto=$ventasgastos->gastos(2);
             $columna=0;
             while ($fila=$gasto->fetch_assoc()) {
               $columna+=$fila["gasto"];
              }
              echo "Gastos: " .$columna ."<br>";
        }
     ?>
  </body>
</html>
