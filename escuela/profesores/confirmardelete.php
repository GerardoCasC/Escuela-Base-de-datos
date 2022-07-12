<?php
$ID=$_GET["ID"];
require_once("../lib/functions.php");
$resultado = get_profesor($connect, $ID);
$profesor = mysqli_fetch_array($resultado);
?>
<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escuela | Modelos de bases de datos</title>
</head>
<body>
    <h2>Eliminar profesor<small> <a href="../profesores/">Regresar</a></small></h2>
    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Telefono</th>
            <th>Correo</th>
            <th>Licenciatura</th>
            <th>Cuatrimestre</th>
            <th>Estatus</th>
</tr>
</thead>
<tbody>
    <tr>
    <td><?php echo $profesor["ID"]; ?></td>
    <td><?php echo $profesor["Nombre"]; ?></td>
    <td><?php echo $profesor["Apellido"]; ?></td>
    <td><?php echo $profesor["Telefono"]; ?></td>
    <td><?php echo $profesor["Correo"]; ?></td>
    <td><?php echo $profesor["Licenciatura"]; ?></td>
    <td><?php echo $profesor["Cuatrimestre"]; ?></td>
    <td><?php echo $profesor["Estatus"]; ?></td>
</tr>
</tbody>
<form action="delete.php" method="post">
    
    <h3>¿Desea elminar este profesor?</h3>
    <input type= "hidden" id="ID" name="ID" value="<?php echo $profesor['ID']; ?>"> <br> <br>
    <input type="submit" value="Confirmar">
</form>
</body>

</html>