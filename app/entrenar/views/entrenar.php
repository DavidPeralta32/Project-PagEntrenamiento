<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Entrenar</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <link rel="stylesheet" href="../../css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&family=Roboto:ital,wght@0,300;1,400&display=swap" rel="stylesheet">

  <script>
    $(document).ready(function(){
      
    });
  </script>
</head>

<body>
  <input type="text" id="nControl" value="<?php echo $usuario; ?>">
  <!-- Barra de navegacion -->
  <div class="menuentrenar">
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
      <!-- Logo -->
      <a class="navbar-brand" href=""><i class="fas fa-basketball-ball"></i></a>

      <!-- Links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <?php
          echo "<a class='nav-link' style='color:white' href='../galeria/controlador/galeria.php'>Galeria</a> ";
          ?>
        </li>
        <li class="nav-item">
          <a class='nav-link'><button style="background: none;border:none;color:white;" id="Perfil" onclick="ShowDatosPerfil()" >Perfil</button></a>
        </li>
        <li class="nav-item">
          <a class='nav-link' href="../galeria/controlador/subir.php"><button style="background: none;border:none;color:white;" id="Perfil" onclick="" >Evidencia</button></a>
        </li>
        <li class="nav-item">
          <a class='nav-link' href="../Asistencia/index.php"><button style="background: none;border:none;color:white;" id="Perfil" onclick="" >Asistencia</button></a>
        </li>
        <li class="nav-item">
          <a class='nav-link'  style='color:white' href="../login/cerrar.php">Cerrar Sesion</a>
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

  <!-- Modal Perfil -->

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Perfil</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="card" style="width: 100%;">
            <img src="" class="card-img-top" alt="">
            <div class="card-body">
              <h5 class="card-title">Perfil del estudiante </h5>
              <p class="card-text">Esta cursando la clase de DISCIPLINA en el Instituto Tecnologico de Veracruz</p>
            </div>
            <!-- tabla resultado bd -->
            <div class="tabla-resultado">
              <table class="table table-dark table-striped table-bordered">
                <thead>
                  <tr>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Fin modal Perfil -->
  
 

  <!-- implemento los script de bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>

  <script>
    
    function AbrirModalPerfil(){
      $("#exampleModal").modal("show");
    }

    function ShowDatosPerfil(usuario){
      let ajaxTraerDatos = $.ajax({
        type: "POST",
        datatype: "json",
        data: {
          funcion: 'listarUsuarioId',
          NControl: $("#nControl").val()
         },
        url: "Controller/UsuarioController.php"
      });
      ajaxTraerDatos.done(function(event){
        let oDatos = JSON.parse(event);
        console.log(oDatos);
        AbrirModalPerfil();
      });
    }
  </script>

</body>

</html>