
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
    <div class="loginpag">
    <div class="form-group">
        <h1>Inicio de Sesion</h1>
        <a href="../../index.html"><button>Inicio</button></a>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
            <input type="text" class="form-control" placeholder="Escribe tu N. Control" id="nControl"
                name="nControl" value="">
            
            <input type="password" class="form-control" placeholder="Escribe tu contraseña" id="password"
                name="password" value="">

                <?php if(!empty($errores)):  ?>
                <div class="alert errores">
                    <ul>
                    <?php echo $errores; ?>
                    </ul>
                   
                </div>
            <?php endif ?>

            <a href="newCuenta.php">¿No tengo cuenta?</a>

            <input type="submit" value="Entrar" name="submit" class="btn btn-primary">
        </form>
    </div>
    </div>
  
    
</body>
</html>