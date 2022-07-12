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
    <title>Formulario</title>
</head>
<body>
<small> <a href="../../materias/">Regresar</a></small>
<form action ="update_query.php" method="post">
        <class="elem-group">
    <input type= "hidden" id="ID" name="ID" value="<?php echo $materia['ID']; ?>"> <br> <br>
    <label for= "Nombre"> Nombre </label> <br>
    <input type= "text" id="Nombre" name="Nombre" value="<?php echo $materia['Nombre']; ?>"> <br> <br>
    <label for= "Licenciatura"> Licenciatura </label> <br>
    <input type= "text" id="Licenciatura" name="Licenciatura" value="<?php echo $materia['Licenciatura']; ?>"> <br> <br>
    <label for= "Cuatrimestre"> Cuatrimestre </label> <br>
    <input type= "text" id="Cuatrimestre" name="Cuatrimestre" value="<?php echo $materia['Cuatrimestre']; ?>"> <br> <br>
    <input type= "submit" >
</form>
</body>
</html>