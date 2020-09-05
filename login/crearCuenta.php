<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear cuenta</title>
</head>
<body>
    <h1>Crear cuenta</h1>
        <form action="loginforma.php" method="POST">
            <div class="form-group">
                <label for="nControlUsuario">No Control</label>
                <input type="text" class="form-control"
                 id="nControlUsuario" name="nControlUsuario" required
                 placeholder="Escriba su numero de control"
                 title="Escriba su No control"
                 pattern = "^[E,A]*[0-9]{8}$">
            </div>
            <div class="form-group">
                <label for="nombreUsuario">Nombre: </label>
                <input type="text" class="form-control"
                id="nombreUsuario" name="nombreUsuario" required
                placeholder="Escriba su nombre"
                title="Escriba su nombre"
                patter="^[A-Z,a-z]{15}$">
            </div>
            <div class="form-group">
                <label for="apellidoPUsuario">Apellido paterno: </label>
                <input type="text" class="form-control"
                id="apellidoPUsuario" name="apellidoPUsuario" required
                placeholder="Escriba su apellido paterno"
                title="Escriba su apellido Paterno"
                patter="^[A-Z,a-z]{15}$">
            </div>
            <div class="form-group">
                <label for="apellidoMUsuario">Apellido materno: </label>
                <input type="text" class="form-control"
                id="apellidoMUsuario" name="apellidoMUsuario" required
                placeholder="Escriba su apellido materno"
                title="Escriba su apellido Materno"
                patter="^[A-Z,a-z]{15}$">
            </div>
            <div class="form-group">
                <label for="carreraUsuario">Carrera: </label>
                <input type="text" class="form-control"
                id="carreraUsuario" name="carreraUsuario" required
                placeholder="Escriba su carrera"
                title="Escriba su carrera"
                patter="^[A-Z,a-z]{30}$">
            </div>
            <input type="submit" value="Crear cuenta">
        </form>
</body>
</html>