<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>tp3</title>
  </head>
  <body>
    <h1>1. Mostrar los números del 1 al 100</h1>
    <?php
      $i=1;
      do {
        print "<p> $i </p> \n";
        $i++;
      } while ($i <= 100);
    ?>

    <br>
    <hr>

    <h1>2. Mostrar los números del 100 al 1</h1>
    <?php
      $i=100;
      do {
        print "<p> $i </p> \n";
        $i--;
      } while ($i >= 1);
    ?>

    <br>
    <hr>

    <h1>3. Mostrar los números pares del 1 al 100</h1>
    <h2>Primer ejemplo</h2>
    <?php
      for($i=2; $i<=100; $i=$i+2){
        print "<p> $i </p> \n";
        }
    ?>

    <br>

    <h2>Segundo ejemplo</h2>
    <?php
      $i=2;
      do {
        print "<p> $i </p> \n";
        $i=$i+2;
      } while ($i <= 100);
    ?>

    <br>
    <hr>

    <h1>4. Mostrar los números impares del 1 al 100</h1>
    <h2>Primer ejemplo</h2>
    <?php
      $i=1;
      do {
        print "<p> $i </p> \n";
        $i=$i+2;
      } while ($i <= 100);
    ?>
    <br>
    <h2>Segundo ejemplo</h2>
    <?php
      for($i=1; $i<=100; $i=$i+2){
        print "<p> $i </p> \n";
        }
    ?>

    <br>
    <hr>

    <h1>5. Mostrar la suma de los números de 1 a 20</h1>
    <?php
      $s=0;
      for($i=1; $i<=20; $i++){
        $s+= $i ;
      }
        print "<p> la suma del 1 al 20 es $s </p>";
    ?>

    <br>

    <h1>6. Mostrar la suma de números pares de 1 a 20</h1>
    <?php
      $s=0;
      for($i=2; $i<=20; $i=$i+2){
        $s+= $i ;
      }
      print "<p> la suma de los numeros pares del 1 al 20 es $s </p>";
    ?>
  </body>
</html>
