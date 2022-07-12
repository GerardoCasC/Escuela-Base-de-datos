<?php
require_once("../lib/functions.php");
$alumno = get_all_alumnos($connect);
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
    <h1>Alumnos</h1> 
    <small> <a href="../../escuela/">Regresar</a></small>
    <small> <a href="formulario.php">Agregar alumno</a></small>
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
    <?php
while ($fila = mysqli_fetch_array($alumno)) {

    ?>
    <tr>
    <td><?php echo $fila["ID"]; ?></td>
    <td><?php echo $fila["Nombre"]; ?></td>
    <td><?php echo $fila["Apellido"]; ?></td>
    <td><?php echo $fila["Telefono"]; ?></td>
    <td><?php echo $fila["Correo"]; ?></td>
    <td><?php echo $fila["Licenciatura"]; ?></td>
    <td><?php echo $fila["Cuatrimestre"]; ?></td>
    <td><?php echo $fila["Estatus"]; ?></td>
    <td><a href="detail.php?ID=<?php echo $fila
    ["ID"]; ?>">Detalle</a></td>
    <td><a href="formulario_update.php?ID=<?php echo $fila
    ["ID"]; ?>">Editar</a></td>
    <td><a href="confirmardelete.php?ID=<?php echo $fila
    ["ID"]; ?>">Eliminar</a></td>
    </tr>
    <?php
    }
    ?>

</tbody>
</body>

</html>