<link rel="stylesheet" type="text/css" href="css/estilos.css">

<?php
include("conexion.php");
$clave=$_POST['clave'];
echo "<p>La clave  del usuario es :$clave </p>";
$descripcion=$_POST['descripcion'];
echo "<p>Descripcion :$descripcion </p>";
$marca=$_POST['marca'];
echo "<p>La marca  del usuario es :$marca </p>";
$precio=$_POST['precio'];
echo "<p>El precio del Articulo es :$precio </p>";
$talla=$_POST['talla'];
echo "<p>La talla  del usuario es :$talla </p>";
$desc5= $_POST['desc5']??'';
$desc10= $_POST['desc10']??'';
$desc15= $_POST['desc15']??'';
$desc30= $_POST['desc30']??'';
$desc50= $_POST['desc50']??'';
$desc70= $_POST['desc70']??'';
$descuento = "$desc5"."$desc10"."$desc15"."$desc30"."$desc50"."$desc70";

$sql = "INSERT INTO deportes_luis(clave, descripcion,marca,precio,talla,descuento) VALUES ('$clave','$descripcion','$marca','$precio','$talla','$descuento')";
       
if (mysqli_query($conexion, $sql)) {
echo "Gracias hemos recibido sus datos....\n";
} else {
echo "Error al insertar datos: " . mysqli_error($conexion);
}




?>
