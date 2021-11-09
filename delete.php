<?php

include("conexion.php");
$con=conectar();

$cod_estudiante=$_GET['id'];

$sql="DELETE FROM alumno  WHERE cod_personal='$cod_personal'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: personal.php");
    }
?>
