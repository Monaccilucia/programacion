<?php
ini_set('display_errors', 1);
ini_set('display_startup', 1);
error_reporting(E_ALL);

include("inclludes/db.php");

if (isset($_GET["id"])) {

}


$id = $_GET["id"];
$sentencia = $conx->prepare("SELECT * FROM usuarios WHERE id = ? ");
$sentencia->bind_param("i",$id);
$sentencia->execute();
$resultado = $sentencia->get_result();
$usuario = $resultado->fetch_object();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h1>Editar usuario</h1>
    <form action="usuarios.php?operacion=EDIT" method="POST">
        <input type="hidden" name="id" value="<?php echo $usuario->id ?>"/>
        <div>
            <label>Email</label>
            <input type="text" name="email" value="<?php echo $usuario->email ?>"/>
        </div>
        <div>
            <label>password</label>
            <input type="text" name="password" value="<?php echo $usuario->password ?>"/>
         </div>
        <button>Guardar</button>
    </form>
</body>
</html>