<?php
include("includes/db.php");
$resultado = $conex->query("SELECT * FROM usuarios");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <a href="nuevo.php">Agregar</a>
  <table>
     <thead>
        <tr>
          <th>Id</th>
          <th>Email</th>
          <th>password</th>
        </tr>
       </thead>
          <?php while ($fila=$resultado->fetch_object()) { ?>
       <tr>
          <td><?php echo $fila->id ?></td>
          <td><?php echo $fila->email ?></td>
          <td><?php echo $fila->password ?></td>
          <td><a href="editar.php?id=<?php echo $fila->id?>">Editar</a></td>
          <td><a href="usuarios.php?operacion=DELETE&id=<?php echo $fila->id?>">Eliminar</a></td>
          <td></td>
        </tr>
        <?php } ?>
     </table>
</body>
</html>
