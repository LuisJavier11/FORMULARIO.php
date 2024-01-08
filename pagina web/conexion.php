<?php
 $server = "localhost";
 $user = "root";
 $pass = "root";
 $db = "deportes_avila";

 $conexion = new mysqli($server,$user,$pass,$db);
 $conexion->query ("SET NAMES 'utf8'");

 if($conexion->connect_errno){
 printf(" La  conexion ah fallado:%s\n",mysqli_connect-errno());
 exit();
 }else{
   echo "";
 }
?>