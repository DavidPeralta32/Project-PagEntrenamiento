<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de alumnos</title>
</head>
<body>
    <div class="contenedor-lista" style="width: 100%; display:flex; justify-content:center">
        <div class="contenido-lista" style="width:80%;">
            <div class="jumbotron jumbotron-fluid">
                <div class="container" style="text-align:center;">
                    <h1 class="display-4">Lista de Alumnos</h1>
                    <p class="lead">Se muestran los usuarios y su informacion asi como el total de asistencia</p>
                </div>
            </div>
            <div class="table">
             <a href="login/cerrar.php">Cerrar sesion</a>   
            <table class="table table-striped table-dark">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">N.- Control</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Password</th>
                    <th scope="col">Carrera</th>
                    <th scope="col">Asistencia</th>
                    <th scope="col">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($rows as $row){ ?>
                    <tr>
                    <th scope="row"><?php echo $row['idUsuarios']; ?></th>
                    <td><?php echo $row['nControl']; ?></td>
                    <td><?php echo $row['nombreUsuario']; ?></td>
                    <td><?php echo $row['apellidoUsuario']; ?></td>
                    <td><?php echo $row['passwordUsuario']; ?></td>
                    <td><?php echo $row['carrera']; ?></td>
                    <td><?php echo $row['asistencia']; ?></td>
                    <td></td>
                    </tr>
                    <?php } ?> 
                </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>