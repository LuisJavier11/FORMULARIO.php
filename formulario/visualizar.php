<?php
  
  include("conexion.php");
       $consulta = 'SELECT * FROM deportes_luis';
       $resultado = mysqli_query($conexion,$consulta);

       echo '<table border = 1>
       <tr>
       <th>Clave</th>
       <th>Descripcion</th>
       <th>Marca</th>
       <th>Precio</th>
       <th>Talla</th>
       <th>Descuentos</th>';

       while($columna = mysqli_fetch_array($resultado)){
       	echo "<tr>";
       echo "<td>" . $columna['clave'] . "</td><td>" 
       . $columna['descripcion'] . "</td><td>" 
       . $columna['marca'] . "</td><td>" 
       . $columna['precio'] . "</td><td>" 
       . $columna['talla'] . "</td><td>" 
       . $columna['descuento'] . "</td>";
       	echo "<tr>";
       	

       }
    echo "</table>";
?>