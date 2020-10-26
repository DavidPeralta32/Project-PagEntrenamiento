<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrenar</title>
    <link rel="stylesheet" href="../../assets/bt4/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&family=Roboto:ital,wght@0,300;1,400&display=swap" rel="stylesheet">
</head>
<body>
   <!-- Barra de navegacion -->
  <div class="menuentrenar">
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
    <!-- Logo -->
    <a class="navbar-brand" href="#"><i class="fas fa-basketball-ball"></i></a>

    <!-- Links -->
    <ul class="navbar-nav">
      <li class="nav-item">
      <?php
        echo "<a class='nav-link' href='../galeria/controlador/galeria.php'>Galeria $usuario</a> ";
        ?>
      </li>

      <!-- Dropdown -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle " href="" id="navbardrop" data-toggle="dropdown">
        <i class="fas fa-user-circle"></i>
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Perfil</a>
          <a class="dropdown-item" href="../galeria/controlador/subir.php">Evidencia</a>
          <a class="dropdown-item" href="../login/cerrar.php">Cerrar Sesion</a>
        </div>
      </li>
    </ul>
  </nav>
  </nav>
</div>


<!-- Videos entrenamiento-->
<div class="videos">
    <h1>Entrenamiento Basquetbol</h1>
    <p>Los imparables <strong>Entrenan</strong> <br> los perdedores se <strong>Quejan</strong> </p>

    <?php
      require_once '../../includes/apiYoutube/index.php';
    ?>

    <!-- <iframe  src="https://www.youtube.com/embed/vjDjgsBG7xs" 
        frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
        allowfullscreen></iframe>
    <p><strong>Clase 01 -</strong>  Introduccion al curso</p> -->
</div>

<!--incluyo el  Boton de whatsapp -->
<?php
 include_once '../../includes/whatsapp.php';
?>


 <!-- implemento los script de bootstrap -->
<script src="../../assets/jqry/jquery-3.4.1.min.js"></script>
<script src="../../assets/bt4/js/bootstrap.min.js"></script> 
</body>
</html>



