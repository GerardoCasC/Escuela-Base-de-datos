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
    <title>Formulario</title>
</head>
<body>
<small> <a href="../../profesores/">Regresar</a></small>
<form action ="update_query.php" method="post">
        <class="elem-group">
    <input type= "hidden" id="ID" name="ID" value="<?php echo $profesor['ID']; ?>"> <br> <br>
    <label for= "Nombre"> Nombre </label> <br>
    <input type= "text" id="Nombre" name="Nombre" value="<?php echo $profesor['Nombre']; ?>"> <br> <br>
<label for="Apellido"> Apellido </label> <br>
<input type= "text" id="Apellido" name="Apellido" value="<?php echo $profesor['Apellido']; ?>"> <br> <br>
<label for= "Telefono"> Telefono </label> <br>
<input type= "text" id="Telefono" name="Telefono" value="<?php echo $profesor['Telefono']; ?>"> <br> <br>
<label for= "Correo"> Correo </label> <br>
<input type= "text" id="Correo" name="Correo" value="<?php echo $profesor['Correo']; ?>"> <br> <br>
    <label for= "Licenciatura"> Licenciatura </label> <br>
    <input type= "text" id="Licenciatura" name="Licenciatura" value="<?php echo $profesor['Licenciatura']; ?>"> <br> <br>
    <label for= "Cuatrimestre"> Cuatrimestre </label> <br>
    <input type= "text" id="Cuatrimestre" name="Cuatrimestre" value="<?php echo $profesor['Cuatrimestre']; ?>"> <br> <br>
    <label for= "Estatus"> Estatus </label> <br>
    <input type= "text" id="Estatus" name="Estatus" value="<?php echo $profesor['Estatus']; ?>"> <br> <br>
    <input type= "submit" >
</form>
</body>
</html>