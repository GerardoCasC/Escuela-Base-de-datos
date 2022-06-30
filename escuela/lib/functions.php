<?php
require_once("../lib/connect.php");

function get_all_alumnos($connect){
$consulta="SELECT * FROM alumnos";
$resultado = mysqli_query($connect, $consulta);
return $resultado;
}

function get_alumno($connect, $ID){
    $consulta="SELECT * FROM alumnos where ID = $ID";
    $resultado = mysqli_query($connect, $consulta);
    return $resultado;    
}

function get_all_profesores($connect){
$consulta="SELECT * FROM profesores";
$resultado = mysqli_query($connect, $consulta);
return $resultado;
}

function get_profesor($connect, $ID){
    $consulta="SELECT * FROM profesores where ID = $ID";
    $resultado = mysqli_query($connect, $consulta);
    return $resultado;    
}

function get_all_materias($connect){
    $consulta="SELECT * FROM materias";
    $resultado = mysqli_query($connect, $consulta);
    return $resultado;
    }

function get_materia($connect, $ID){
    $consulta="SELECT * FROM materias where ID = $ID";
    $resultado = mysqli_query($connect, $consulta);
    return $resultado;    
    }    

function insertar_alumnos($Nombre, $Apellido, $Teléfono, $Correo_electrónico, $Licenciatura, $Cuatrimestre, $Status){
    global $connect;
    $consulta="insert into alumnos (Nombre, Apellido, Teléfono, Correo electrónico, Licenciatura, Cuatrimestre, Status)
    values('$Nombre', '$Apellido', '$Teléfono', '$Correo_electrónico', '$Licenciatura', '$Cuatrimestre', '$Status')";
    $resultado = mysqli_query($connect, $consulta);
    //return $resultado;  
}
?>