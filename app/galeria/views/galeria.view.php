<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/32258d33f0.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../../css/style.css">
    <title>Galeria</title>
</head>
<body>
    <div class="link-regresar">
    <a href="../../entrenar/entrenar.php">Entrenar</a>
    </div>

    <div class="galeria">
         <h1 class="titulo">Galeria</h1>
          
        <?php foreach ($fotos as $foto): ?>
        <div class="fotos">
         <a href="foto.php?id=<?php echo $foto['id']; ?>">
            <img src="../fotos/<?php echo $foto['imagen']; ?>" alt="">
        </a>
    </div>
    <?php endforeach ?>

    <div class="footer">
        <?php if ($pagina_actual >1): ?>
        <div class="regresar">
            <a class="flecha-regresar" href="galeria.php?p=<?php echo $pagina_actual -1; ?>"><i class="far fa-arrow-alt-circle-left"></i></a>
        </div>
        <?php endif ?>

        <?php  if($total_paginas != $pagina_actual): ?>
        <div class="siguiente">
            <a class="flecha-siguiente" href="galeria.php?p=<?php echo $pagina_actual +1; ?>"><i class="far fa-arrow-alt-circle-right"></i></a>
        </div>
        <?php endif ?>
    </div>
</body>
</html>