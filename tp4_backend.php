<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tp4_backend</title>
  </head>
  <body>
    <body>
<br><hr>
<h1>Ejercicio 1</h1>
  <!-- 1. Almacenar en un array los 10 primeros números pares y mostrar en pantalla uno debajo del otro. -->
<br><hr>
<?php
$npares=["0","2","4","6","8","10"];
foreach ($npares as  $valor) {
  print "$valor";
  echo "<br>";
}
 ?>
<h2>Ejercicio 2</h2>
   <br><hr>
<!-- 2. Crear un array e introducir los siguientes valores: Pedro, Ana, 34 y 1, sin asignar el índice de la
matriz. Mostrar el esquema del array con print_r().-->
<?php
$matriz= ["Pedro","Ana","34", "1"];
print_r($matriz);
 ?>
   <br><hr>
   <h3>Ejercicio 3</h3>
<!-- 3. Crear un array asociativo e introducir los siguientes valores:
Nombre: Pedro
Apellido: Torres
Dirección: Av. Mayor 3703
Teléfono: 1122334455
  -->
 <br><hr>
 <?php
$asociativa=['Nombre'=>Pedro,
'Apellido'=>Torres,
'Dirección'=> Av. Mayor 3703,
'Teléfono'=>1122334455,
];

  ?>

<br><hr>
<br><hr>
<h4>Ejercicio 4</h4>
 <!-- 4. Crear un array introduciendo las ciudades: Madrid, Barcelona, Londres, New York, Los Ángeles y
Chicago, sin asignar índices al array. A continuación, muestra el contenido del array.
Ejemplo: La ciudad con el índice 0 tiene el nombre Madrid.-->
<br><hr>
<?php
$ciudades=["Madrid","Barcelona", "Londres","New York","Los Ángeles","Chicago"];
print "La ciudad con el índice 0 tiene el nombre  $ciudades[0].";
echo "<br>";
print "La ciudad con el índice 1 tiene el nombre $ciudades[1].";
echo "<br>";
print "La ciudad con el índice 2 tiene el nombre $ciudades[2].";
echo "<br>";
print "La ciudad con el índice 3 tiene el nombre $ciudades[3].";
echo "<br>";
print "La ciudad con el índice 4 tiene el nombre $ciudades[4].";
echo "<br>";
print "La ciudad con el índice 5 tiene el nombre $ciudades[5].";
echo "<br>";
 ?>

<br><hr>
<h5>Ejercicio 5</h5>
<!-- 5. Repite el ejercicio anterior pero ahora se ha de crear índices, MD para Madrid, BCL para Barcelona,
LD para Londres, NY para New York, LA para Los Ángeles y CCG para Chicago.
Ejemplo: El índice de Madrid es MD-->
<br><hr>
<?php
$ciudades=['MD'=>"Madrid", 'BCL'=>"Barcelona",'LD'=>"Londres",'NY'=>"New York",'LA'=>"Los Ángeles",'CCG'=>"Chicago"];
print "El índice de $ciudades[MD] es MD.";
echo "<br>";
print "El índice de $ciudades[BCL] es BCL.";
echo "<br>";
print "El índice de $ciudades[LD] es LD.";
echo "<br>";
print "El índice de $ciudades[NY] es NY.";
echo "<br>";
print " El índice de $ciudades[LA] es LA.";
echo "<br>";
print "El índice de $ciudades[CCG] es CCG.";
echo "<br>";
 ?>

  </body>

  </html>
