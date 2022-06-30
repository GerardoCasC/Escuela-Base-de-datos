<?php
$ID=$_GET["ID"];
require_once("../lib/functions.php");
$resultado = get_materia($connect, $ID);
$materia = mysqli_fetch_array($resultado);
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
    <h1>Detalle de la materia <?php echo $materia ["Nombre"]
     ?> <small> <a href="../materias/">Regresar</a></small></h1>
    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Cuatrimestre</th>
            <th>Licenciatura</th>
</tr>
</thead>
<tbody>
    <tr>
    <td><?php echo $materia["ID"]; ?></td>
    <td><?php echo $materia["Nombre"]; ?></td>
    <td><?php echo $materia["Cuatrimestre"]; ?></td>
    <td><?php echo $materia["Licenciatura"]; ?></td>
</tr>
    <?php
    ?>

</tbody>
</body>

</html>