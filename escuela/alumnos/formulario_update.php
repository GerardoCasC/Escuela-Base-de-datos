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
    <title>Formulario</title>
</head>
<body>
<small> <a href="../alumnos/">Regresar</a></small>
<form action ="update_query.php" method="post">
    <input type= "hidden" id="ID" name="ID" value="<?php echo $alumno['ID']; ?>"> <br> <br>
    <label for= "Nombre"> Nombre </label> <br>
    <input type= "text" id="Nombre" name="Nombre" value="<?php echo $alumno['Nombre']; ?>"> <br> <br>
<label for="Apellido"> Apellido </label> <br>
<input type= "text" id="Apellido" name="Apellido" value="<?php echo $alumno['Apellido']; ?>"> <br> <br>
<label for= "Telefono"> Telefono </label> <br>
<input type= "text" id="Telefono" name="Telefono" value="<?php echo $alumno['Telefono']; ?>"> <br> <br>
<label for= "Correo"> Correo </label> <br>
<input type= "text" id="Correo" name="Correo" value="<?php echo $alumno['Correo']; ?>"> <br> <br>
    <label for= "Licenciatura"> Licenciatura </label> <br>
    <input type= "text" id="Licenciatura" name="Licenciatura" value="<?php echo $alumno['Licenciatura']; ?>"> <br> <br>
    <label for= "Cuatrimestre"> Cuatrimestre </label> <br>
    <input type= "text" id="Cuatrimestre" name="Cuatrimestre" value="<?php echo $alumno['Cuatrimestre']; ?>"> <br> <br>
    <label for= "Estatus"> Estatus </label> <br>
    <input type= "text" id="Estatus" name="Estatus" value="<?php echo $alumno['Estatus']; ?>"> <br> <br>
    <input type= "submit" >
</form>

</body>
</html>