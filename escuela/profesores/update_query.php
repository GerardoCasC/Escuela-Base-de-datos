<?php
require_once("../lib/functions.php");

$Nombre =$_POST["Nombre"];
$Apellido =$_POST["Apellido"];
$Telefono =$_POST["Telefono"];
$Correo =$_POST["Correo"];
$Licenciatura =$_POST["Licenciatura"];
$Cuatrimestre =$_POST["Cuatrimestre"];
$Estatus =$_POST["Estatus"];
$ID =$_POST["ID"];

update_profesores($Nombre, $Apellido, $Telefono, $Correo, $Licenciatura, $Cuatrimestre, $Estatus, $ID);

header("Location: index.php"); 
?> 