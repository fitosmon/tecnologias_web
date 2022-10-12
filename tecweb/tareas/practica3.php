<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">
<head>
    <title>Practica 2</title>
</head>
<body>
     <div class="pregunta">
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
     </div>
     <div class="pregunta">
         <h2>Pregunta 2:</h2>
             <p>Proporcionar los valores de $a, $b, $c como sigue:</p>
             <?php
             $a = "ManejadorSQL";
             $b = 'MySQL';
             $c = &$a;
             echo "<p>variable a: $a</p>" ;
             echo "<p>variable b: $b</p>" ;
             echo "<p>variable c: $c</p>" ;
         
             $a = "PHP server";
             $b = &$a;
             echo "<p>variable a despues de asignacion: $a</p>" ;
             echo "<p>variable b despues de asignacion $b</p>" ;
             ?>
             <p>El valor de la variable se actualizo en el momento de volver a asignarle nuevo valor a ambas</p>
     </div>

    <div class="pregunta">
        <h2>Tercera pregunta</h2>
        <p>Muestra el contenido de cada variable inmediatamente después de cada asignación,
        verificar la evolución del tipo de estas variables (imprime todos los componentes de los
        arreglo):</p>
        <?php
        $a = "PHP5";
        echo "<p>variable a: $a de tipo: ".gettype($a)." </p>";
        $z[] = &$a;
        echo "<p>arreglo z posicion 0: $z[0] de tipo: ".gettype($z)."</p>";
        $b = "5a version de PHP";
        echo "<p>variable b: $b de tipo: ".gettype($b)."</p>";
        $c = $b*10;
        echo "<p> variable c: $c de tipo: ".gettype($c)."</p>";
        $a .= $b;
        echo "<p>variable a concatenada a b $a de tipo ".gettype($a)."</p>";
        $b *= $c;
        echo "<p>variable b con *= $b de tipo ".gettype($b)."</p>";

        $z[0] = "MySQL";

        echo "<div>";
        print_r($z);
        echo "</div>";

        echo "<h2>Cuarta pregunta</h2>
            <p>Lee y muestra los valores de las variables del ejercicio anterior, pero ahora con la ayuda de
                la matriz $ GLOBALS o del modificador global de PHP.
            </p>";

            
/*         echo "<p> $GLOBALS['a'] </p>";
        echo "<p> $GLOBALS['b'] </p>";
        echo "<p> $GLOBALS['c'] </p>";
        echo "<p> $GLOBALS['z[0]'] </p>";
        echo "<p> $GLOBALS[''] </p>"; */
        
        echo "<h2>Quinta pregunta</h2>
            <p>Dar el valor de las variables $ a, $ b, $ c al final del siguiente script:
            </p>";

        echo "<p>a = '7 personas'</p>";
        echo "<p>b = (integer) a;</p>";
        echo "<p>a = 9E3</p>";
        echo "<p>c = (double) a</p>";

            $a = "7 personas";
            $b = (integer) $a;
            $a = "9E3";
            $c = (double) $a;      

            echo "<p> variable a: $a</p>";
            echo "<p>variable b: $b</p>";
            echo "<p> variable a: $a</p>";
            echo "<p>variable c: $c</p>";

            echo "<h2>Sexta pregunta</h2>
            <p>Dar y comprobar el valor booleano de las variables $ a, $ b, $ c, $ d, $ e y $ f y muéstralas
            usando la función var_dump(' datos ').
            </p>
            <p>
            Después investiga una función de PHP que permita transformar el valor booleano de $ c y $ e
            en uno que se pueda mostrar con un echo:
            </p>";

            echo "<p>$ a = '0';</p>";
            echo "<p>$ b = 'TRUE';</p>";
            echo "<p>$ c = FALSE;</p>";
            echo "<p>$ d = ($ a OR $ b)</p>";
            echo "<p>$ e = ($ a AND $ c)</p>";
            echo "<p>$ f = ($ a XOR $ b)</p>";
            
            echo "<div>";
            $a = "0";
            var_dump($a);
            $b = "TRUE";
            var_dump($b);
            $c = FALSE;
            var_dump($c);
            $d = ($a OR $b);
            var_dump($d);
            $e = ($a AND $c);
            var_dump($e);
            $f = ($a XOR $b);
            var_dump($f);

            echo "</div>";

            $text = var_export($c,true);
            echo "<p>Impreso mediante la funcion la variable c: $text</p>";
        ?>
    </div>
    <p>
    <a href="http://validator.w3.org/check?uri=referer"><img
      src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Strict" height="31" width="88" /></a>
  </p>
</body>
</html>