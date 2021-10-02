<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/32258d33f0.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../css/login.css">
</head>
<body>
    <div class="loginpag">
    <div class="imagen">
            <img src="../../img/avatarLogin.jpg" alt="">
        </div>
    <div class="form-group">
        <!-- <h1>Inicio de Sesion</h1> -->
        <a  href="../../index.html"><button class="btn Inicio"><i class="fas fa-home"></i> Inicio</button></a>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
            <input type="text" class="form-control" placeholder="Escribe tu N. Control" id="nControl" name="nControl" value="">
            
            <input type="password" class="form-control" placeholder="Escribe tu contraseña" id="password"name="password" value="">

            <div class="footerLogin">
                <button type="submit" name="submit" class="btn entrar"><i class="fas fa-sign-in-alt"></i> Entrar</button>
            </div>
            <!-- Mensaje de error -->
            <?php if(!empty($errores)):  ?>
                    <div class="alert alert-danger" role="alert">
                        N.Control y/o Contraseña incorrectas
                    </div>
            <?php endif ?>
        </form>
    </div>
    </div>
  
    
</body>
</html>