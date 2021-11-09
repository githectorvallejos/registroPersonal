<?php

include("conexion.php");
$con=conectar();

$cod_personal=$_GET['id'];

echo $cod_personal;

$sql="DELETE FROM personal  WHERE cod_personal='$cod_personal'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: personal.php");
    }
?>
