<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Slabo+27px&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/32258d33f0.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../../css/style.css">
    <title>Galeria</title>
</head>
<body>
    <header>
        <div class="contenedor-foto">
            <h1 class="titulo">Foto: <?php if(!empty($foto['numControl'])){
                echo $foto['numControl'];
            }else{
                echo $foto['imagen'];
            } ?></h1>
        </div>
    </header>
    <div class="contenedor-foto">
        <div class="foto">
            <img src="../../entrenar/Evidencias/<?php echo $foto['imagen']; ?>" alt="">
            <p class="texto"><?php echo $foto['hora'];  ?></p>
            <a href="galeria.php" class="regresar"><i class="fa fa-long-arrow-left"></i> Regresar</a>
        </div>
    </div>
    </section>

    <footer class="footer-foto">
        <p class="copyright">
            Galeria creada Departamento de Extra Escolares
        </p>
    </footer>
</body>
</html>