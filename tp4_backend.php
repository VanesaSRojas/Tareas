<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>1. Almacenar en un array los 10 primeros números pares y mostrar en pantalla uno debajo del otro</h1>
    <?php
      $pares = ["2", "4", "6", "8", "10", "12", "14", "16", "18", "20"];
      foreach ($pares as $number) {
        print "<p> $number </p>\n";
      }
    ?>

    <h1>2. Crear un array e introducir los siguientes valores: Pedro, Ana, 34 y 1, sin asignar el índice de la
    matriz. Mostrar el esquema del array con print_r().</h1>
    <?php
      $varios = ["Pedro", "Ana", "34", "1"];
      print "<pre>";
      print_r ($varios);
      print "<pre>";
    ?>

    <h1>3. Crear un array asociativo e introducir los siguientes valores:
        Nombre: Pedro
        Apellido: Torres
        Dirección: Av. Mayor 3703
        Teléfono: 1122334455</h1>
    <?php
      $datos = ['nombre' => "Pedro", 'apellido' => "Torres", 'Direccion' => "Av. Mayor 3703", 'telefono' => "1122334455"];
      print "<pre>";
      print_r($datos);
      print "</pre>";

    ?>

    <h1>4. Crear un array introduciendo las ciudades: Madrid, Barcelona, Londres, New York, Los Ángeles y
    Chicago, sin asignar índices al array. A continuación, muestra el contenido del array.
    Ejemplo: La ciudad con el índice 0 tiene el nombre Madrid</h1>
    <?php
      $ciudades = ["Madrid", "Barcelona", "Londres", "New York", "Los Ángeles", "Chicago"];
      print "<p> La ciudad con el índice 0 tiene el nombre $ciudades[0] </p>\n";
      print "<p> La ciudad con el índice 1 tiene el nombre $ciudades[1] </p>\n";
      print "<p> La ciudad con el índice 2 tiene el nombre $ciudades[2] </p>\n";
      print "<p> La ciudad con el índice 3 tiene el nombre $ciudades[3] </p>\n";
      print "<p> La ciudad con el índice 4 tiene el nombre $ciudades[4] </p>\n";
      print "<p> La ciudad con el índice 5 tiene el nombre $ciudades[5] </p>\n";
    ?>

    <h1>5. Repite el ejercicio anterior pero ahora se ha de crear índices, MD para Madrid, BCL para Barcelona,
    LD para Londres, NY para New York, LA para Los Ángeles y CCG para Chicago.
    Ejemplo: El índice de Madrid es MD.</h1>
    <?php
    $ciudades = ['MD' => "Madrid", 'BCL' => "Barcelona", 'LD' => "Londres", 'NY' => "New York", 'LA' => "Los Ángeles", 'CCG' => "Chicago"];
    print "<p> El índice de $ciudades[MD] es MD </p>\n";
    print "<p> El índice de $ciudades[BCL] es BCL </p>\n";
    print "<p> El índice de $ciudades[LD] es LD </p>\n";
    print "<p> El índice de $ciudades[NY] es NY </p>\n";
    print "<p> El índice de $ciudades[LA] es LA </p>\n";
    print "<p> El índice de $ciudades[CCG] es CCG </p>\n";
    ?>
  </body>
</html>
