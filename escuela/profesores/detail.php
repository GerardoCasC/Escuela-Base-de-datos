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
    <h1>Detalle del profesor <?php echo $profesor ["Apellido"]." ". $profesor ["Nombre"]
     ?> <small> <a href="../profesores/">Regresar</a></small></h1>
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
    <tr>
    <td><?php echo $profesor["ID"]; ?></td>
    <td><?php echo $profesor["Nombre"]; ?></td>
    <td><?php echo $profesor["Apellido"]; ?></td>
    <td><?php echo $profesor["Teléfono"]; ?></td>
    <td><?php echo $profesor["Correo electrónico"]; ?></td>
    <td><?php echo $profesor["Licenciatura"]; ?></td>
    <td><?php echo $profesor["Cuatrimestre"]; ?></td>
    <td><?php echo $profesor["Status"]; ?></td>
</tr>
    <?php
    ?>

</tbody>
</body>

</html>