<?php
require_once("../lib/functions.php");

$Nombre =$_POST["Nombre"];
$Licenciatura =$_POST["Licenciatura"];
$Cuatrimestre =$_POST["Cuatrimestre"];
$ID =$_POST["ID"];

update_materia($Nombre, $Licenciatura, $Cuatrimestre, $ID);

header("Location: index.php"); 
?> 