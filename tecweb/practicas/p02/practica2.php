<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 2</title>
</head>
<body>
     <h1>Practica 2</h1>
     <h2>Pregunta 1:</h2>
     <p>Determina cuál de las siguientes variables son válidas y explica por qué: </p>
     <ul>
        <li>$_myvar es una variable de php valida ya que comienza con el signo $ y empieza con un guion bajo</li>
        <li>$_7var, es una variable de php valida ya que comienza con el signo $ y empieza con un guion bajo </li>
        <li>myvar no es una variable valida ya que no contiene el $</li>
        <li>$myvar es variable valida ya que comienza con $ seguido de caracter</li>
        <li>$var7 es variable valida ya que comienza con $ y caracter</li>
        <li>$_element1 es una variable de php valida ya que comienza con el signo $ y empieza con un guion bajo</li>
        <li>$house*5 no es variable valida ya que contiene un caracter ASCII menor a 127</li>
     </ul>
     <h2>Pregunta 2:</h2>
    <p>Proporcionar los valores de $a, $b, $c como sigue:</p>
    <?php
    $a = "ManejadorSQL";
    $b = 'MySQL';
    $c = &$a;
    echo "<p>$a</p>" ;
    echo "<p>$b</p>" ;
    echo "<p>$c</p>" ;

    $a = "PHP server";
    $b = &$a;
    echo "<p>$a</p>" ;
    echo "<p>$b</p>" ;
    ?>
    <p>El valor de la variable se actualizo en el momento de volver a asignarle nuevo valor a ambas</p>

    <h2>Tercera pregunta</h2>
</body>
</html>