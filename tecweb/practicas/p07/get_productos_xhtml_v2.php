<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">



	<?php

		$data = array();

		if(isset($_GET['precio']))
		{
			$precio = $_GET['precio'];
		}
		else
		{
			die('Parámetro "precio" no detectado...');
		}

		if (!empty($precio))
		{
			/** SE CREA EL OBJETO DE CONEXION */
			@$link = new mysqli('localhost', 'root', 'ergd247f', 'marketzone');
			/** NOTA: con @ se suprime el Warning para gestionar el error por medio de código */

			/** comprobar la conexión */
			if ($link->connect_errno) 
			{
				die('Falló la conexión: '.$link->connect_error.'<br/>');
				//exit();
			}

			/** Crear una tabla que no devuelve un conjunto de resultados */
			if ( $result = $link->query("SELECT * FROM productos WHERE precio <= $precio AND eliminado=0") ) 
			{
				/** Se extraen las tuplas obtenidas de la consulta */
				$row = $result->fetch_all(MYSQLI_ASSOC);

				/** Se crea un arreglo con la estructura deseada */
				foreach($row as $num => $registro) {            // Se recorren tuplas
					foreach($registro as $key => $value) {      // Se recorren campos
						$data[$num][$key] = $value;
					}
				}

				/** útil para liberar memoria asociada a un resultado con demasiada información */
				$result->free();
			}

			$link->close();

			/** Se devuelven los datos en formato JSON */

		}
	?>

<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Producto</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
	<body>
		<h3>PRODUCTO</h3>
		<div>
			<table>
			<tr>
				<th>id</th> 
				<th>nombre</th>
				<th>marca</th> 
				<th>modelo</th> 
				<th>precio</th> 
				<th>detalles</th>
				<th>unidades</th>
				<th>imagen</th>
			</tr>
				<?php

				foreach ($data as $producto => $registro){
					echo "<tr id='".$data[$producto]["id"]."'>";
					foreach($registro as $key => $value ){
						echo "<td>".$value."</td>";
					}	
					echo "<td><button onclick='getInfo()' >Modificar</button></td>";
					echo "</tr>";

				}
				?>
		</table>
		</div>

		</body>
</html>

<script>
function getInfo(){

var rowId = event.target.parentNode.parentNode.id;

var data = document.getElementById(rowId).childNodes;

var id = data[0].innerHTML;
var nombre = data[1].innerHTML;
var marca  = data[2].innerHTML;
var modelo  = data[3].innerHTML;
var precio  =data[4].innerHTML;
var detalles =  data[5].innerHTML;
var unidades = data[6].innerHTML;
var imagen = data[7].innerHTML;


alert("ID: " + id + "\nNombre: " + nombre + "\nMarca: " + marca + "\nModelo: " + modelo + "\nPrecio: " + precio + "\nDetalles: " + detalles + "\nUnidades: " + unidades);

send2form(id, nombre, marca, modelo, precio, detalles, unidades, imagen);
}


function send2form(id, nombre, marca, modelo, precio, detalles, unidades, imagen) {
	var urlForm = "http://localhost/tecweb/practicas/p07/formulario_productos_v2.php";
	var propNombre = "nombre="+nombre;
	var propId= "id="+id;
	var propMarca = "marca="+marca;
	var propModelo = "modelo="+modelo;
	var propPrecio = "precio=" +precio;
	var propDetalles = "detalles="+detalles;
	var propUnidades = "unidades="+unidades;

	window.open(urlForm+"?"+propNombre+"&"+propId+"&"+propMarca+"&"+propPrecio+"&"+propModelo+"&"+propDetalles+"&"+propUnidades);

}
</script>

