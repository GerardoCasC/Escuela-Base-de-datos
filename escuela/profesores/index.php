<?php
require_once("../lib/connect.php");
$consulta="select * from profesores";
$resultado = mysqli_query($connect, $consulta);
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
    <h1>Profesores</h1>
    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Teléfono</th>
            <th>Correo electrónico</th>
            <th>Licenciatura</th>
            <th>Cuatrimestre</th>
            <th>Status</th>
</tr>
</thead>
<tbody>
    <?php
while ($fila = mysqli_fetch_array($resultado)) {

    ?>
    <tr>
    <td><?php echo $fila["ID"]; ?></td>
    <td><?php echo $fila["Nombre"]; ?></td>
    <td><?php echo $fila["Apellido"]; ?></td>
    <td><?php echo $fila["Teléfono"]; ?></td>
    <td><?php echo $fila["Correo electrónico"]; ?></td>
    <td><?php echo $fila["Licenciatura"]; ?></td>
    <td><?php echo $fila["Cuatrimestre"]; ?></td>
    <td><?php echo $fila["Status"]; ?></td>
</tr>
    <?php
    }
    ?>

</tbody>
</body>

</html>