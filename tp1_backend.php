<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1> Ejercicio 1</h1>
    <?php
      echo "Hola mundo";
    ?>
    <br>
    <hr>
    <h1>ejercicio 2</h1>
    <?php
      $mensaje = "Hola mundo";
      echo $mensaje;
    ?>
    <br>
    <hr>
    <h1>ejercicio 3</h1>
    <?php
      $a = 20;
      $b = 3;
    ?>
    <br>
    <h2>Suma</h2>
    <?php
      $suma = $a + $b;
      echo $suma;
     ?>
     <br>
     <hr>
     <h2>Resta</h2>
     <?php
      $resta = $a - $b;
      echo $resta;
     ?>
     <br>
     <hr>
     <h2>Multiplicacion</h2>
     <?php
      $multiplicacion = $a * $b;
      echo $multiplicacion;
     ?>
     <br>
     <hr>
     <h2>Division</h2>
     <?php
      $division = floor ($a / $b);
      echo $division;
     ?>
     <br>
     <hr>
     <h2>Resto</h2>
     <?php
      $resto = $a % $b;
      echo $resto;
     ?>
     <br>
     <hr>
     <h1>Eercicio 4</h1>
     <?php
      $c = 20;
      $d = 1.8;
      $e = 32;
      $f = ($c * $d) + $e;
      echo $f;
     ?>
     <br>
     <hr>
     <h1> Ejercicio 5</h1>
     <br>
     <?php
      $base = 18;
      $altura = 12;
      $g= 2;
     ?>
     <br>
     <h2>Perimetro del rectangulo</h2>
     <?php
     $perimetror = $g* $base + $g * $altura;
     echo $perimetror;
     ?>
     <br>
     <hr>
     <h2>Area de un rectangulo</h2>
     <?php
      $arear = $base * $altura;
      echo $arear;
     ?>
     <br>
     <hr>
     <?php
      $radio = 30;
      $pi = 3.14;
     ?>
     <br>
     <h2>Perimetro de un circulo</h2>
     <?php
      $perimetroc = $g* $pi * $radio;
      echo $perimetroc;
      ?>
    <br>
    <hr>
    <h2>Area de un circulo</h2>
    <?php
      $areac = $pi * ($radio**$g);
      echo $areac;
     ?>
  </body>
</html>
