
<?php 

$id = $datos[0]['id'];
$nombres = $datos[0]['nombres'];
$paterno = $datos[0]['apellido_paterno'];
$materno = $datos[0]['apellido_materno']; 
$rut = $datos[0]['rut']; 
$telefono = $datos[0]['rut'];
$email = $datos[0]['email']; 
$status = $datos[0]['status']; 
$fecha_nacimiento = $datos[0]['fecha_nacimiento']; 




?>

<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<title>Actualiza un nombre</title>
</head>
<body>

<div class="container">
    <h1>Actualizar - Codeigniter </h1>

    <div class="row">
        <div class="col-sm-12">
            <form method="POST" action="<?php echo base_url().'/actualizar' ?>">
                <input type="text" id="id" name="id" hidden="" 
                value="<?php echo  $id ?>">

                <label for="nombres ">nombres</label> 
                    <input type="text" name="nombres" class="form-control"
                    value="<?php echo $nombres ?>">

                    <label for="apellido_paterno">Apellido Paterno</label>
                    <input type="text" name="apellido_paterno" class="form-control" name="apellido_paterno"
                    value="<?php echo $paterno ?>">
                
                    <label for="apellido_materno">Apellido Materno</label>
                    <input type="text" name="apellido_materno" class ="form-control"name="apellido_paterno"
                    value="<?php echo $materno ?>">

                    <label for="rut">Rut</label>
                    <input type="text" name="rut" class="form-control"
                    value="<?php echo $rut ?>">

                    <label for="telefono">Telefono</label>
                    <input type="text" name="telefono" class="form-control"
                    value="<?php echo $telefono ?>">

                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control"
                    value="<?php echo $email ?>">

                    <label for="status">Status</label>
                    <input type="number" name="status" class="form-control"
                    value="<?php echo $status ?>">
                
                    <label for="fecha_nacimiento">Fecha de nacimiento</label>
                    <input type="date" name="fecha_nacimiento" class="form-control"
                    value="<?php echo $fecha_nacimiento ?>">

                    <br>
                    <button class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

