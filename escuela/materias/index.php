<?php
require_once("../lib/functions.php");
$materia = get_all_materias($connect);
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
    <h1>Materias</h1>
    <small> <a href="../../escuela/">Regresar</a></small>
    <small> <a href="../materias/formulario.php/">Agregar materia</a></small>
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
    <?php
while ($fila = mysqli_fetch_array($materia)) {

    ?>
    <tr>
    <td><?php echo $fila["ID"]; ?></td>
    <td><?php echo $fila["Nombre"]; ?></td>
    <td><?php echo $fila["Cuatrimestre"]; ?></td>
    <td><?php echo $fila["Licenciatura"]; ?></td>
    <td><a href="detail.php?ID=<?php echo $fila
    ["ID"]; ?>">Detalle</a></td>
    <td><a href="#">Editar</a></td>
    <td><a href="#">Eliminar</a></td>
</tr>
    <?php
    }
    ?>

</tbody>
</body>

</html>