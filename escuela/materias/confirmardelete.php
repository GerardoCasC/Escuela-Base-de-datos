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
    <h2>Eliminar materia<small> <a href="../materias/">Regresar</a></small></h2>
    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Licenciatura</th>
            <th>Cuatrimestre</th>
</tr>
</thead>
<tbody>
    <tr>
    <td><?php echo $materia["ID"]; ?></td>
    <td><?php echo $materia["Nombre"]; ?></td>
    <td><?php echo $materia["Licenciatura"]; ?></td>
    <td><?php echo $materia["Cuatrimestre"]; ?></td>
</tr>
</tbody>
<form action="delete.php" method="post">
    
    <h3>¿Desea elminar esta materia?</h3>
    <input type= "hidden" id="ID" name="ID" value="<?php echo $materia['ID']; ?>"> <br> <br>
    <input type="submit" value="Confirmar">
</form>
</body>

</html>