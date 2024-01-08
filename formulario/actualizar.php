<?php 
include ('conexion.php');

$clave=$_POST["clave"];
$descripcion=$_POST["descripcion"];
$marca=$_POST["marca"]; 
$precio=$_POST["precio"];
$talla=$_POST["talla"];
$descuento=$_POST["descuento"];

$sql = " UPDATE deportes_luis SET clave='$clave',descripcion='$descripcion',marca='$marca',precio='$precio',talla='$talla',descuento='$descuento'";
$query = mysqli_query($con,$sql);

if($query){
    header("Location: index.php");

};




?>