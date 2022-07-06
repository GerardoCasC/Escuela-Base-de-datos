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

    function insertar_alumnos($Nombre, $Apellido, $Telefono, $Correo, $Licenciatura, $Cuatrimestre, $Estatus){
        global $connect;
        $consulta = "INSERT INTO alumnos(Nombre, Apellido, Telefono, Correo, Licenciatura, Cuatrimestre, Estatus) 
        VALUES ('$Nombre', '$Apellido', '$Telefono', '$Correo', '$Licenciatura', '$Cuatrimestre', '$Estatus')";
        $resultado = mysqli_query($connect, $consulta);
        //return $resultado;
        }

    function update_alumnos($Nombre, $Apellido, $Telefono, $Correo, $Licenciatura, $Cuatrimestre, $Estatus, $ID){
        global $connect;
        $consulta = "UPDATE alumnos SET Nombre='$Nombre', Apellido='$Apellido', Telefono='$Telefono', Cuatrimestre='$Cuatrimestre', Estatus='$Estatus' WHERE ID=$ID";
        $resultado = mysqli_query($connect, $consulta);
    }

    function insertar_materia($Nombre, $Licenciatura, $Cuatrimestre){
        global $connect;
        $consulta = "INSERT INTO materias(Nombre, Licenciatura, Cuatrimestre) VALUES ('$Nombre', '$Licenciatura', '$Cuatrimestre')";
        $resultado = mysqli_query($connect, $consulta);
        //return $resultado;
        }
?>