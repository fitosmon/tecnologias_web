<?php

function multiplo5y7($numero) {
    if ($numero%5==0 && $numero%7==0){
        return 'respuesta: '.$numero.' es multiplo de 5 y 7';
    }
    else{
        return 'respuesta: '.$numero.' no es multiplo de 5 y 7';
    }
        
}

?>