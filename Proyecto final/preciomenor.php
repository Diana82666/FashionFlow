<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<h1>Tienda de ropa</h1>

<h2>Lista de ropa</h2>
<p>La siguiente lista muestra los datos de la ropa actualmente en stock.</p>
<a href="listar.php">Volver</a>
    <table border="1">
    <tr>
        <th>ID</th>
        <th>TIPO DE PRENDA</th>
        <th>MARCA</th>
        <th>TALLE</th>
        <th>PRECIO</th>
        <th>IMAGEN</th>
        <th>EDITAR</th>
        <th>BORRAR</th>
    </tr>
    <?php
    // 1) Conexion
   $conexion=mysqli_connect("127.0.0.1","root","");
   mysqli_select_db($conexion,"tienda");

   // 2) Preparar la orden SQL
   $consulta= "SELECT * FROM ropa WHERE precio < 500";

    // 3) Ejecutar la orden y obtenemos los registros
    $datos=mysqli_query ($conexion, $consulta);

    //// 4) Mostrar los datos del registro
    while ($reg = mysqli_fetch_array($datos)) { ?>
       <tr>
       <td><?php echo $reg['id']; ?></td>
       <td><?php echo $reg['prenda']; ?></td>
       <td><?php echo $reg['marca']; ?></td>
       <td><?php echo $reg['talle']; ?></td>
       <td><?php echo $reg['precio']; ?></td>
       <td><img src="data:image/png;base64, <?php echo base64_encode($reg['imagen'])?>" alt="" width="100px" height="100px"></td>
       <td><a href="modificar.php?id=<?php echo $reg['id'];?>">Editar</a></td>
       <td><a href="borrar.php?id=<?php echo $reg['id'];?>">Borrar</a></td>
       </tr>
   <?php } ?>
   </table>
  </body>
</html>
