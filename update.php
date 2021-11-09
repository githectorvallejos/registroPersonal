<?php

include("conexion.php");
$con=conectar();

$cod_personal=$_POST['cod_personal'];
$dni=$_POST['dni'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$puesto=$_POST['puesto'];

$sql="UPDATE personal SET  dni='$dni',nombres='$nombres',apellidos='$apellidos',puesto='$puesto' WHERE cod_personal='$cod_personal'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: personal.php");
    }
?>