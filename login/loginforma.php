
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="formulario">
         <h1>Inicio de Sesion</h1>
        <form action="login.php" method="post">
            <div class="datos-formulario">
            No.Control: <input type="text"  name="name" ><br>
            Contraseña: <input type="password" name="pass"><br>
            <input type="submit">
            <br>
            <a href="crearCuenta.php">No tengo cuenta</a>
            </div>
     </form>
    </div>
</body>
</html>