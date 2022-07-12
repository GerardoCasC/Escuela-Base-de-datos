<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar</title>
</head>
<body>
    <a href="../alumnos"> Regresar </a>
    <form action="insert.php" method="post" >
        <label for= "Nombre"> Nombre </label> <br>       
        <input type="text" name= "Nombre" id=""> <br> <br>
        <label for= "Licenciatura"> Licenciatura </label> <br>
        <input type="text" name= "Licenciatura" id=""> <br> <br>
        <label for= "Cuatrimestre"> Cuatrimestre </label> <br>
        <input type="text" name= "Cuatrimestre" id=""> <br> <br>
        <input type="submit" value="Agregar">

        </form>
</body>
</html>