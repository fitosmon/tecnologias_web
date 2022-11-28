<?php
$nombre = $_POST["name"];
$marca  = $_POST['marca'];
$modelo = $_POST['modelo'];
$precio = $_POST['precio'];
$detalles = $_POST['detalles'];
$unidades = $_POST['unidades'];
$imagen   = $_POST['imagen'];

/** SE CREA EL OBJETO DE CONEXION */
@$link = new mysqli('localhost', 'root', 'Akvr251190', 'marketzone');	

/** comprobar la conexión */
if ($link->connect_errno) 
{
    die('Falló la conexión: '.$link->connect_error.'<br/>');
    /** NOTA: con @ se suprime el Warning para gestionar el error por medio de código */
}

$check_sql = "SELECT nombre, marca, modelo FROM productos WHERE marca='{$marca}' AND modelo='{$modelo}'";
$resultado= $link->query($check_sql);
$rows = mysqli_num_rows($resultado);

if ($rows==0){
    
    /** Crear una tabla que no devuelve un conjunto de resultados */
    $sql = "INSERT INTO productos VALUES (null, '{$nombre}', '{$marca}', '{$modelo}', {$precio}, '{$detalles}', {$unidades}, '{$imagen}', 0)";
    if ( $link->query($sql) ) 
    {
        echo 'Producto {$nombre} marca: {$marca} , {$modelo} , con precio: {$precio} insertado con ID: '.$link->insert_id;
    }
    else
    {
        echo 'El Producto no pudo ser insertado =(';
    }
    
    $link->close();
}

else{
    
    echo "El producto ya existe";
    $link->close();
}

    ?>