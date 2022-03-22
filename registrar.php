<?php
include_once('con_db.php');
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$celular=$_POST['celular'];
$correo=$_POST['correo'];
$grado=$_POST['grado'];
$dni=$_POST['dni'];

    $conectar=conn();
    $sql="INSERT INTO `datos`(`nombres`, `apellidos`, `celular`, `correo`, `grado`, `dni`) 
    VALUES ('$nombres','$apellidos','$celular','$correo','$grado','$dni')";
    $resul=mysqli_query($conectar, $sql)or trigger_error("Query failed SQL-Error".mysqli_error($conectar),E_USER_ERROR);
    echo"$sql";
?>