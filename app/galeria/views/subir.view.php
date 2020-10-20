<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/style.css">
    <title>Subir foto</title>
</head>
<body>
    <h1>Subir foto</h1>
    <div class="contenedor-galeria">
        <div class="contenedor-subir">
        <form class="formulario" action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data">
            <label for="">Selecciona una foto:</label>
            <input type="file" name="foto" id="foto">
            <label for="">Numero de control:</label>
            <input type="text" name="numControl" id="numControl">
            <label for="">Hora:</label>
            <input type="text" name="hora" id="hora" placeholder="Ej: 17:00-18:00">

            <?php if (isset($error)):  ?>
                <p class="error"><?php echo $error; ?></p>
            <?php endif ?>

            <input type="submit" value="Subir">
        </form>    
        </div>
    </div>
    <div class="footer-subir">
        <ul>
            <li> <a href="../../entrenar/index.php" class="link">Regresar</a></li>
            <li> <a href="../controlador/galeria.php" class="link">Galeria</a></li>
        </ul>
    </div>
    
</body>
</html>