<?php
include("conexion.php");
if(isset($_POST['input'])){

	$input=$_POST['input'];
	$query="SELECT * FROM  deportes_luis WHERE Clave LIKE'{$input}%' OR Descripcion LIKE'{$input}%' OR  Marca LIKE'{$input}%' OR Precio LIKE'{$input}%' OR  Talla LIKE'{$input}%'  OR  descuento LIKE'{$input}%' ";
	$result=mysqli_query($conexion,$query);
	if (mysqli_num_rows($result) >0){?>
		<table class="table table-bordered table-striped mt-4">
			<thead>
				<tr>
					<th>Clave</th>
					<th>Descripcion</th>
					<th>Marca</th>
					<th>Precio</th>
					<th>Talla</th>
					<th>Descuento</th>
					
				</tr>
			</thead>
			<tbody>
				<?php
				while ($row = mysqli_fetch_assoc($result)){
					$Clave=$row['clave'];
					$Descripcion=$row['descripcion'];
					$Marca=$row['marca'];
					$Precio=$row['precio'];
					$Talla=$row['talla'];
					$descuento=$row['descuento'];

					?>
					<tr>
					<th><?php echo $Clave;?></th>
					<th><?php echo $Descripcion;?></th>
					<th><?php echo $Marca;?></th>
					<th><?php echo $Precio;?></th>
					<th><?php echo $Talla;?></th>
					<th><?php echo $descuento;?></th>
					</tr>

					<?php 
				}

               
				?>
			</tbody>

         </table> 
         <?php
 }else{
 	echo"<h6 class= 'text-danger text-center mt-3'>No data Found</h6>";
 }
}