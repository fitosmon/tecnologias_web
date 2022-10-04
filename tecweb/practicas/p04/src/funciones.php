<?php

function multiplo5y7($numero) {
    if ($numero%5==0 && $numero%7==0){
        return 'respuesta: '.$numero.' es multiplo de 5 y 7';
    }
    else{
        return 'respuesta: '.$numero.' no es multiplo de 5 y 7';
    }
        
}

function tablaParImpar(){
    $fila=0;
    $respuesta=False;        
    print "<p>par        impar        par</p>";
    while ($respuesta==False){
        print "<p>";
        for ($i=0; $i < 3; $i++) { 
            $tabla[$fila][$i]=rand(0, 1000);
            print "{$tabla[$fila][$i]} , ";
        }
        print "</p>";
        if (($tabla[$fila][0])%2!=0 && ($tabla[$fila][1])%2==0 && ($tabla[$fila][2])%2!=0){
            $respuesta=True;
        }
        ++$fila;
    }
    return ($fila*3).' numeros obtenidos en '.$fila.' iteraciones';
}

?>
