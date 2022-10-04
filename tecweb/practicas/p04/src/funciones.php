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

function multiplo($factor){
    print "<p>";
    do {
        $encontrado=False;
        $comparado=rand($factor, 1000);
        print "{$comparado}, ";
        if($comparado%$factor==0){
            $encontrado=True;
        }
    }
    while($encontrado==False);

    print "</p>";
    return "El primer numero encontrado fue: {$comparado}";
}

function hacerTabla(){
    for($j=97; $j < 123; $j++){
        $tabla[$j]=chr($j);
    }
    print "<table>";
    foreach ($tabla as $key => $value){
        print "<tr><td> {$key} </td><td> {$value} </td></tr>";
    }
    print "</table>";
    return "listo";
}

?>

