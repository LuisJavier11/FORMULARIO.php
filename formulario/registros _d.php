<?php

$clave = $_POST['eliminar'];

include('conexion.php');  

/*COMO SE USARA mysqli POR SER CONEXION EN WEB Y NUEVA VERSION DE XAMPP
SE DEBEN DE USAR DOS PARAMETROS AL EVALUAR EL $query COLOCANDO PRIMERO LA CONEXION
SEPARANDO CON UNA COMA */

$query = "delete from deportes_luis where clave = '$clave'";  
$result = mysqli_query($conexion, $query); //agregar como segundo parámetro la variable que establece la conexión  

//include('cerrar_conexion.php');  
echo '<br>';
echo '<br>';
echo '<center>';
echo "<h2><p><font style=color:navy;font-size:120%;font-family:Consolas;>El Registro han sido Eliminado con éxito...</p></h2>";


?>