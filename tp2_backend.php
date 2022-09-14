<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>1. Crear una variable n y validar que sea un número positivo.</h1>
    <?php
      $n = 20;

      if ($n > 0) {
        echo "$n es positivo";
      }
      elseif ($n < 0) {
       echo "$n no es positivo, es negativo";
      }
      else {
       echo "$n no es positivo, es igual a 0";
      }
     ?>

     <br>
     <hr>

     <h1>2. Crear una variable n y validar que sea un número mayor a 1 y menor a 10</h1>
     <?php
      $n = 12;
      if ($n > 1 and $n < 10) {
        echo "$n es mayor a 1 y menor a 10";
      }
      elseif ($n < 1) {
        echo "$n es menor a 1";
      }
      else {
       echo "$n es mayor que 10";
     }
      ?>

      <br>
      <hr>

      <h1>3. Crear una variable n y validar que sea un número mayor a 10 o menor a 2.</h1>
      <?php
       $n = 5;
       if ($n > 10 || $n < 2) {
         echo "$n es mayor a 10 o menor a 2";
       }
       else {
        echo "$n no es mayor a 10 o menor a 2";
      }
       ?>

       <br>
       <hr>

       <h1>4. Crear dos variables, una con nombre numero1 y otra con el nombre de numero2. Si numero1 es
           mayor a numero2, mostrar por pantalla, la suma y la resta.
           Si numero2 es mayor a numero1, mostrar por pantalla la multiplicación, la división entera y el resto de la división. Si numero1 y
           numero2 son iguales, mostrar el siguiente mensaje “Los números ingresados son iguales”.
      </h1>
       <?php
        $numero1 = 4;
        $numero2 = 4;

        $suma= $numero1+$numero2;
        $resta= $numero1-$numero2;
        $multi= $numero1*$numero2;
        $division= floor($numero1/$numero2);
        $resto= $numero1%$numero2;
        if ($numero1 > $numero2) {
          echo "total suma: $suma <br> total resta: $resta" ;
        }
        elseif ($numero2 > $numero1) {
          echo "total multiplicacion: $multi <br> total division: $division <br> total resto: $resto;" ;
        }
        else {
         echo "los numeros ingresados son iguales";
       }
        ?>

  </body>
</html>
