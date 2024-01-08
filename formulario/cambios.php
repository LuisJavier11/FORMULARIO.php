<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edicion</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container my-5">
    <h2>Lista de registros</h2>
    <a class="btn btn-primary" href="/FORMULARIO/crear.php" role="button">nuevo registro</a>
    <br>
<table class="table">
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
    include("conexion.php");
    $sql = "SELECT* FROM deportes_luis";
    $result = $conexion->query($sql);

    if(!$result){
        die("invalid query: " . $conexion->error);
    }  

    while ($row = $result-> fetch_assoc()) {   
        echo"
        <tr>
        <td>$row[clave]</td>
        <td>$row[descripcion]</td>
        <td>$row[marca]</td>
        <td>$row[precio]</td>
        <td>$row[talla]</td>
        <td>$row[descuento]</td>
        <td>
            <a class='btn btn-primary btn-sm' href=' /FORMULARIO/editar.php?id=$row[clave]'>editar</a>
            <a class='btn btn-danger  btn-sm' href=' /FORMULARIO/eliminar.php?id=$row[clave]'>Eliminar</a>
        </td>
    </tr>
        ";   
    }


    ?>
 
  </tbody>
</table>
</div>
</body>
</html>
