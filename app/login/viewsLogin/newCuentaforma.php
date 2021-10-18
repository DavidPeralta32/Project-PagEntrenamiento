<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear cuenta</title>
    <script src="https://kit.fontawesome.com/32258d33f0.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../css/newCuenta.css">
</head>

<body>
    <div class="contenedor-formulario">
        <h1>Registrar Cuenta</h1>
        <form class="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">

            <div class="form-group">
                <label for="nControlUsuario">No Control</label>
                <input type="text" class="form-imput" id="nControlUsuario" name="nControlUsuario" required placeholder="Ejemplo: E20020606" title="Escriba su No control" pattern="^E[0-9]{8}$">
            </div>
            <div class="form-group">
                <label for="nombreUsuario">Nombre: </label>
                <input type="text" class="form-imput" id="nombreUsuario" name="nombreUsuario" required placeholder="Escriba su nombre" title="Escriba su nombre">
            </div>
            <div class="form-group">
                <label for="apellidoPUsuario">Apellido paterno: </label>
                <input type="text" class="form-imput" id="apellidoPUsuario" name="apellidoPUsuario" required placeholder="Escriba su apellido paterno" title="Escriba su apellido Paterno">
            </div>
            <div class="form-group">
                <label for="passwordUsuario">Contraseña: </label>
                <input type="password" class="form-imput" id="passwordUsuario" name="passwordUsuario" required placeholder="Escribe tu contraseña" title="Escribe tu contraseña">
            </div>
            <div class="form-group">
                <label for="passwordUsuario">Confirmar contraseña: </label>
                <input type="password" class="form-imput" id="passwordUsuario2" name="passwordUsuario2" required placeholder="Confirma tu contraseña" title="Confirma tu contraseña">
            </div>
            <div class="form-group">
                <label for="carreraUsuario">Carrera: </label>
                <select class="form-imput" name="carreraUsuario">
                    <option></option>
                    <option>Lic. Administracion</option>
                    <option>Ing. Electronica</option>
                    <option>Ing. Electrica</option>
                    <option>Ing. Industrial</option>
                    <option>Ing. Mecanica</option>
                    <option>Ing. Bioquimica</option>
                    <option>Ing. Mecatronica</option>
                    <option>Ing. Quimica</option>
                    <option>Ing. Sistemas Computacionales</option>
                    <option>Ing. Energias Renovables</option>
                    <option>Ing. Gestion Empresarial</option>
                </select>
            </div>
            <div class="form-group">
                <label for="carreraUsuario">Disciplina: </label>
                <select class="form-imput" name="disciplinaUsuario">
                    <option></option>
                    <option>Basquetbol</option>
                    <option>Natacion</option>
                </select>
            </div>

            <?php if (!empty($errores)) :  ?>
                <div class="alert errores">
                    <ul>
                        <?php echo $errores; ?>
                    </ul>

                </div>
            <?php endif ?>
            <div class="footer-formulario">
                <a class="link-inicio" href="index.php">Iniciar Sesion</a>
                <button type="submit" class="btnRegistrar" name="submit"><i class="fas fa-user-plus"></i> Registrar</button>
                <!-- <input type="submit" class="btnRegistrar" value="Registrar" name="submit"> -->
            </div>


        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>

</html>