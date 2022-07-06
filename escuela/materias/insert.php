<?php
require_once("../lib/functions.php");

$Nombre =$_POST["Nombre"];
$Licenciatura =$_POST["Licenciatura"];
$Cuatrimestre =$_POST["Cuatrimestre"];

insertar_materia($Nombre, $Licenciatura, $Cuatrimestre);

header("Location: index.php");
?> 