<!DOCTYPE html >
<html>

  <head>
    <meta charset="utf-8" >
    <title>Registro de producto</title>
    <style type="text/css">
      ol, ul { 
      list-style-type: none;
      }
    </style>
    <script src="./formulario.js"></script>
  </head>

  <body>
    <h1>Registro de nuevos productos a Base de Datos</h1>

    <p>Introduce los datos del nuevo producto</p>
    
    <form id="formularioProductos" action="./set_producto.php" method="post">

    <h2>Información de Producto</h2>

      <fieldset>
        <legend>Información Personal</legend>

        <ul>
          <li><label for="form-id">ID:</label><input type="text" name="id" id="form-id" value= "<?= !empty($_POST['id'])?$_POST['id']:$_GET['id'] ?>" required></li>
          <li><label for="form-name">Nombre: *</label> <input type="text" name="name" id="form-name" value= "<?= !empty($_POST['nombre'])?$_POST['nombre']:$_GET['nombre'] ?>"  onblur="validarValor(this)" maxlength="100" required></li>
          <li><label for="form-marca">Marca: *</label> 
            <select name="marca" id="form-marca" required> 
                <option value="mabe">Mabe</option>
                <option value="spring-air">Spring air</option>
                <option value="winia">Winia</option>
                <option value="lester">Lester</option>
                <option value="Rustica">Rustica</option>
            </select></li>
          <li><label for="form-modelo">Modelo: *</label> <input type="text" name="modelo" value= "<?= !empty($_POST['modelo'])?$_POST['modelo']:$_GET['modelo'] ?>" id="form-tel" maxlength="25" required></li>
          <li><label for="form-precio">Precio: *</label><input type="number" name="precio" value= "<?= !empty($_POST['precio'])?$_POST['precio']:$_GET['precio'] ?>"  id="form-story" onblur="validarValor(this)" min="100" required></li>
          <li><label for="form-detalles">Detalles: *</label><textarea name="detalles" id="form-detalles" cols="30" rows="10" ><?= !empty($_POST['detalles'])?$_POST['detalles']:$_GET['detalles'] ?></textarea></li>
          <li><label for="form-unidades">Unidades: *</label><input type="number" name="unidades" value= "<?= !empty($_POST['unidades'])?$_POST['unidades']:$_GET['unidades'] ?>"  id="form-unidades" required min="0"></li>
          <li><label for="form-imagen">Sube una imagen</label><input type="file" name="imagen" id="form-imagen" ></li>
        </ul>
      </fieldset>

      <p>
        <input type="submit" value="Actualizar producto">
        <input type="reset">
      </p>

    </form>
  </body>
</html>