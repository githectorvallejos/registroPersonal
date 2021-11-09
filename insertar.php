<?php
include("conexion.php");
$con=conectar();

$cod_estudiante=$_POST['cod_personal'];
$dni=$_POST['dni'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$puesto=$_POST['puesto'];


$sql="INSERT INTO personal VALUES('$cod_personal','$dni','$nombres','$apellidos','$puesto')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: personal.php");
    
}else {
}
?>