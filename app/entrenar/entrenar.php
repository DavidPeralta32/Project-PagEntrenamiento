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
    <a class="navbar-brand" href=""><i class="fas fa-basketball-ball"></i></a>

    <!-- Links -->
    <ul class="navbar-nav">
      <li class="nav-item">
      <?php
        echo "<a class='nav-link' href='../galeria/controlador/galeria.php'>Galeria</a> ";
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
          <a class="dropdown-item" href="../Asistencia/index.php">Asistencia</a>
          <a class="dropdown-item" href="../login/cerrar.php">Cerrar Sesion</a>
        </div>
      </li>
    </ul>
  </nav>
</div>

<!-- seleccion de diciplina -->
<div class="disciplina" style="padding-top: 95px;padding-bottom: 10px;display:flex; justify-content: center;background-color:#9FBAE1;">
<div class="card" style="width: 20rem;margin:7px;">
  <img src="../../img/balon.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Basquetbol</h5>
    <p class="card-text">Extra-escolar con el profesor Bonillla</p>
    <a href="basquetbol.php" class="btn btn-primary">Ir a clases</a>
  </div>
</div>
<div class="card" style="width: 20rem;margin:7px;">
  <img src="../../img/nata4.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Natacion</h5>
    <p class="card-text">Extra-escolar con el Profesor Isaias.</p>
    <a href="natacion.php" class="btn btn-primary">Ir a clases</a>
  </div>
</div>
</div>


<!-- Videos entrenamiento
<div class="videos">
    <h1>Entrenamiento Basquetbol</h1>
    <p>Los imparables <strong>Entrenan</strong> <br> los perdedores se <strong>Quejan</strong> </p>

    <?php
      //require_once '../../includes/apiYoutube/index.php';
    ?>

    <iframe  src="https://www.youtube.com/embed/vjDjgsBG7xs" 
        frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
        allowfullscreen></iframe>
    <p><strong>Clase 01 -</strong>  Introduccion al curso</p>
</div> -->

<!--incluyo el  Boton de whatsapp -->
<?php
 include_once '../../includes/whatsapp.php';
?>


 <!-- implemento los script de bootstrap -->
<script src="../../assets/jqry/jquery-3.4.1.min.js"></script>
<script src="../../assets/bt4/js/bootstrap.min.js"></script> 
</body>
</html>



