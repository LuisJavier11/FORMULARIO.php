<?php
include("conexion.php");
$clave = "";
$descripcion = "";
$marca = "";
$precio = "";
$talla = "";
$descuento = "";

$errorMessage = "";
$succesMessage="";

if ( $_SERVER['REQUEST_METHOD'] =='POST'){
    $clave=$_POST["Clave"];
    $descripcion=$_POST["Descripcion"];
    $marca=$_POST["Marca"]; 
    $precio=$_POST["Precio"];
    $talla=$_POST["Talla"];
    $descuento=$_POST["Descuento"];

    do{
        if ( empty($clave) || empty($descripcion) || empty($marca) || empty($precio) || empty($talla) || empty($descuento) ){
            $errorMessage = "Todas las casillas son requeridas";
            break;
        }

        

        //add a new date

  
     $sql = "INSERT INTO deportes_luis (clave,descripcion,marca,precio,talla,descuento)". 
     "VALUES ('$clave','$descripcion','$marca','$precio','$talla','$descuento')";
     $result =  $conexion -> query($sql);
     if(!$result){
        $errorMessage = "Invalido: " . $conexion ->error;
        break;
     }
     $clave="";
     $descripcion="";
     $marca="";
     $precio="";
     $talla="";
     $descuento="";
     


    $succesMessage="Datos agregados correctamente";

    header("location: /FORMULARIO/cambios.php");
    exit;

    } while(false);
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crear</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
     <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container my-5">
    <h2>Nuevo registro</h2>

    <?php 
    if(!empty($errorMessage)){
        echo "
        <div class='alert alert-warning alert-dismissible fade show' role='alert'>
        <strong>$errorMessage</strong>
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
        </div>
        ";
    }

    ?>
    <form method="post">
        <div class="row mb-3">
            <label class="col-sm-3 col-form-label">Clave:</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="Clave" value="<?php echo $clave; ?>" >
        </div>    
        </div>
        <div class="row mb-3">
            <label class="col-sm-3 col-form-label">Descripcion:</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="Descripcion" value="<?php echo $descripcion; ?>">
        </div>    
        </div>
        <div class="row mb-3">
            <label class="col-sm-3 col-form-label">Marca:</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="Marca" value="<?php echo $marca; ?>">
        </div>    
        </div>
        <div class="row mb-3">
            <label class="col-sm-3 col-form-label">Precio:</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="Precio" value="<?php echo $precio; ?>">
        </div>    
        </div>
        <div class="row mb-3">
            <label class="col-sm-3 col-form-label">Talla:</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="Talla" value="<?php echo $talla; ?>">
        </div>    
        </div>
        <div class="row mb-3">
            <label class="col-sm-3 col-form-label">Descuento</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" name="Descuento" value="<?php echo $descuento; ?>">
        </div>    
        </div>

        <?php 
        if(!empty($succesMessage)){
            echo"
            <div class='row mb-3'>
            <div class='offset-sm-3 col-sm-6'>
            <div class='alert alert-scces alert-dismissible fade show' role='alert'>
            <strong>$succesMessage</strong>
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label</button>
            </div>
            </div>
            </div>
            ";
        }
        
        ?>

     <div class="row mb-3">
        <div class="offset-sm-3 col-sm-3 d-grid">
        <button type="submit"class="btn btn-primary">Crear</button>
        </div>
        <div class="col-sm-3 d-grid">
            <a class="btn btn-outline-primary" href="/FORMULARIO/cambios.php" role="button">cancel</a>
        </div>

     </div>



        </form>
    </div>
</body>
</html>