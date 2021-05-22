<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>CRUD codeigniter</title>
</head>
<body>

    <div class="container">
        <h1>Insertar - Codeigniter</h1>
        <div class="row">
            <div class="col-sm-12">
                <form method="POST" action="<?php echo base_url().'/crear' ?>">
				    <label for="nombres ">nombres</label> 
                    <input type="text" name="nombres" class="form-control">

                    <label for="apellido_paterno">Apellido Paterno</label>
                    <input type="text" name="apellido_paterno" class="form-control" name="apellido_paterno">
                
                    <label for="apellido_materno">Apellido Materno</label>
                    <input type="text" name="apellido_materno" class ="form-control"name="apellido_paterno">

                    <label for="rut">Rut</label>
                    <input type="text" name="rut" class="form-control">

                    <label for="telefono">Telefono</label>
                    <input type="text" name="telefono" class="form-control">

                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control">

                    <label for="status">Status</label>
                    <input type="number" name="status" class="form-control">
                
                    <label for="fecha_nacimiento">Fecha de nacimiento</label>
                    <input type="date" name="fecha_nacimiento" class="form-control">

                    <br>
                    <button class="btn btn-primary">Guardar</button>
                </form>
            </div>
        </div>
        <hr>
        <h2>Listado de personas</h2>

        <div class="row">
            <div class="col-sm-12">
                <div class="table table-responsive">
                    <table class="table table-hover table-bordered">
                        <tr>
						<th scope="col">id</th>
						<th scope="col">Nombres</th>
						<th scope="col">Apellido paterno</th>
						<th scope="col">Apellido Materno</th>
						<th scope="col">rut </th>
						<th scope="col">telefono </th>
						<th scope="col">email </th>
						<th scope="col">Estado</th>            
						<th scope="col">Fecha de Nac. </th>
						<th scope="col">Editar</th>
						<th scope="col">Eliminar</th>
                        </tr>
                    <?php foreach($datos as $key): ?>
                        <tr>
							<td><?php echo $key->id; ?></td>
							<td><?php echo $key->nombres; ?></td>
							<td><?php echo $key->apellido_paterno; ?></td>
							<td><?php echo $key->apellido_materno; ?></td>
							<td><?php echo $key->rut; ?></td>
							<td><?php echo $key->telefono; ?></td>
							<td><?php echo $key->email; ?></td>
							<td><?php echo $key->status; ?></td>
							<td><?php echo $key->fecha_nacimiento; ?></td>
										<td>
                                <a href="<?php echo base_url().'/user/'.$key->id ?>" class="btn btn-warning btn-sm">Editar</a>
                            </td>
                            <td>
                                <a href="<?php echo base_url().'/eliminar/'.$key->id ?>" class="btn btn-danger btn-sm">Eliminar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script type="text/javascript">
        let mensaje = '<?php echo $mensaje ?>';

        if (mensaje == '1') {
            swal(':D','Agregado con exito!','success');
        } else if (mensaje == '0'){
            swal(':(','Fallo al agregar!','error');
        } else if (mensaje == '2'){
            swal(':D','Actualizado con exito!','success');
        } else if (mensaje == '3'){
            swal(':(','Fallo al Actualizar!','error');
        } else if (mensaje == '4'){
            swal(':D','Eliminado con exito!','success');
        } else if (mensaje == '5'){
            swal(':(','Fallo al eliminar!','error');
        }
    </script>
</body>
</html>
