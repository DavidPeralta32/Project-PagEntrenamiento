<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear cuenta</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="form-group2">
    <h1>Crear cuenta</h1>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
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
                title="Escriba su nombre">
            </div>
            <div class="form-group">
                <label for="apellidoPUsuario">Apellido paterno: </label>
                <input type="text" class="form-control"
                id="apellidoPUsuario" name="apellidoPUsuario" required
                placeholder="Escriba su apellido paterno"
                title="Escriba su apellido Paterno">
            </div>
            <div class="form-group">
                <label for="passwordUsuario">Contraseña: </label>
                <input type="password" class="form-control"
                id="passwordUsuario" name="passwordUsuario" required
                placeholder="Escribe tu contraseña"
                title="Escribe tu contraseña">
            </div>
            <div class="form-group">
                <label for="carreraUsuario">Carrera: </label>
                <input type="text" class="form-control"
                id="carreraUsuario" name="carreraUsuario" required
                placeholder="Escriba su carrera"
                title="Escriba su carrera">
            </div>

            <?php if($errores):  ?>
                <div class="alert errores">
                    <?php echo $errores; ?>
                </div>
                <?php elseif ($enviado): ?>
                    <div class="alert succes">
                        <h3>Agregado con exito</h3>
                    </div>
            <?php endif ?>    

            <input type="submit" value="Crear cuenta" name="submit">
        </form>
    </div>      
</body>
</html>