<?php
$ID=$_GET["ID"];
require_once("../lib/functions.php");
$resultado = get_alumno($connect, $ID);
$alumno = mysqli_fetch_array($resultado);
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
    <h1>Detalle del alumno <?php echo $alumno ["Apellido"]." ". $alumno ["Nombre"]
     ?> <small> <a href="../alumnos/">Regresar</a></small></h1>
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
    <td><?php echo $alumno["ID"]; ?></td>
    <td><?php echo $alumno["Nombre"]; ?></td>
    <td><?php echo $alumno["Apellido"]; ?></td>
    <td><?php echo $alumno["Telefono"]; ?></td>
    <td><?php echo $alumno["Correo"]; ?></td>
    <td><?php echo $alumno["Licenciatura"]; ?></td>
    <td><?php echo $alumno["Cuatrimestre"]; ?></td>
    <td><?php echo $alumno["Estatus"]; ?></td>
</tr>
    <?php
    ?>

</tbody>
</body>

</html>