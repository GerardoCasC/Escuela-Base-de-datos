<?php
require_once("../lib/functions.php");

$Nombre = $_POST["Nombre"];
$Apellido = $_POST["Apellido"];
$Teléfono = $_POST["Teléfono"];
$Correo_electrónico = $_POST["Correo electrónico"];
$Licenciatura = $_POST["Lnicenciatura"];
$Cuatrimestre = $_POST["Cuatrimestre"];
$Status = $_POST["Status"];

insertar_alumnos($Nombre, $Apellido, $Teléfono, $Correo_electrónico, $Licenciatura, $Cuatrimestre, $Status);

header("Location: index.php");
?>
