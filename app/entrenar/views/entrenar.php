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
    $(document).ready(function() {

    });
  </script>
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
          echo "<a class='nav-link' style='color:white' href='../galeria/controlador/galeria.php'>Galeria</a> ";
          ?>
        </li>
        <li class="nav-item">
          <a class='nav-link'><button style="background: none;border:none;color:white;" id="Perfil" onclick="ShowDatosPerfil()"><i class="far fa-user-circle" style="font-size: 20px;"></i> Perfil</button></a>
        </li>
        <li class="nav-item">
          <a class='nav-link'><button style="background: none;border:none;color:white;" id="Perfil" onclick="showModalEvidencia()"><i class="far fa-file-image" style="font-size: 20px;"></i> Evidencia</button></a>
          <!-- <a class='nav-link' href="../galeria/controlador/subir.php"><button style="background: none;border:none;color:white;" id="Perfil" onclick=""><i class="far fa-file-image" style="font-size: 20px;"></i> Evidencia</button></a> -->
        </li>
        <li class="nav-item">
          <a class='nav-link'><button style="background: none;border:none;color:white;" id="btn_asistencia" onclick="showModalAsistencia()"><i class="fas fa-list-ul" style="font-size: 20px;"></i> Asistencia</button></a>
        </li>
        <li class="nav-item">
          <a class='nav-link' style='color:white' href="../login/cerrar.php"><i class="fas fa-sign-out-alt" style="font-size: 20px;"></i> Salir</a>
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

  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="nombrePerfil"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="card" style="width: 100%;">
            <img src="" class="card-img-top" alt="">
            <div class="card-body">
              <h5 class="card-title">Perfil del estudiante </h5>
              <p class="card-text" id="txt_descripcion"></p>
            </div>
            <!-- tabla resultado bd -->
            <div class="tabla-resultado">
              <table class="table table-dark table-striped table-bordered">
                <thead>
                  <tr>
                    <th scope="col">Num Control</th>
                    <th scope="col">Carrera</th>
                    <th scope="col">Disciplina</th>
                  </tr>
                </thead>
                <tbody id="tablaPerfil">

                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="modal-footer" style="justify-content: flex-start;">
          <button type="button" class="btn btn-secondary" style="padding: 8px;background-color: red;color: white;border-radius: 5px;" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Fin modal Perfil -->

  <!-- Modal Asistencia -->
  <div class="modal fade" id="modalAsistencia" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="">Asistencia</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="contenedor-asistencia" style="width: 100%; display:flex;flex-wrap:wrap ;justify-content: center;">
            <p>Pase de asistencia, favor de introducir <strong>una asistencia por dia.</strong> </p>

            <form>
              <div class="form-group">
                <label for="exampleFormControlInput1">Numero de Control</label>
                <input type="text" class="form-control" id="sNControlAsistencia" placeholder="Num. Control" readonly>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="checkPresente" value="presente" checked>
                <label class="form-check-label" for="inlineCheckbox1">Presente</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" disabled>
                <label class="form-check-label" for="inlineCheckbox2">Retardo</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" disabled>
                <label class="form-check-label" for="inlineCheckbox3">Falta</label>
              </div>
              <div class="btn-asistencia" style="text-align: right;">
                <button type="button" onclick="enviarAsistencia()" style="padding: 8px;background-color: green;color: white;border-radius: 5px;" class="btn btn-primary btn-sm">Enviar</button>
              </div>
            </form>
          </div>
        </div>
        <div class="modal-footer" style="justify-content: flex-start;">
          <button type="button" class="btn btn-secondary" style="padding: 8px;background-color: red;color: white;border-radius: 5px;" data-bs-dismiss="modal">Cancelar</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Fin modal asistencia -->

  <!-- Modal Evidencia -->
  <div class="modal fade" id="modalEvidencia" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Subir Evidencia</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="contenedor-galeria">
            <div class="form-group">
              <form class="formulario" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data">
                <label for="">Selecciona una foto:</label>
                <input type="file" name="foto" id="foto">
                <label for="">Numero de control:</label>
                <input type="text" name="nControlEvidencia" id="nControlEvidencia" readonly>
                <label for="">Hora:</label>
                <input type="text" name="hora" id="hora" placeholder="Ej: 17:00-18:00">

                <button type="submit" onclick="" style="padding: 8px;background-color: green;color: white;border-radius: 5px;" class="btn btn-primary btn-sm">Subir</button>
              </form>
            </div>
          </div>
        </div>
        <div class="modal-footer" style="justify-content: flex-start;">
          <button type="button" class="btn btn-secondary" style="padding: 8px;background-color: red;color: white;border-radius: 5px;" data-bs-dismiss="modal">Cancelar</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Fin modal evidencia -->




  <script>
    /**
     * variable que contiene el numero de control
     * de quien inicio sesion
     */
    var nControlSesion = <?php echo json_encode($usuario) ?>;

    /**
     *Funcion que trae los datos de un usuario 
     *para mostrarlos en el modal de perfil 
     */
    function ShowDatosPerfil() {
      let ajaxTraerDatos = $.ajax({
        type: "POST",
        datatype: "json",
        data: {
          funcion: 'listarUsuarioId',
          NControl: nControlSesion
        },
        url: "Controller/UsuarioController.php"
      });
      ajaxTraerDatos.done(function(event) {

        let oDatos = JSON.parse(event);
        //console.log(oDatos);
        if (oDatos.length > 0) {
          $("#exampleModal").modal("show");
          $("#nombrePerfil").text(oDatos[0].nombreUsuario + ' ' + oDatos[0].apellidoUsuario);
          $("#txt_descripcion").text("Esta cursando la clase extra escolar de " + oDatos[0].disciplina + " en el instituto Tecnologico de Veracruz")
          $("#tablaPerfil").empty();
          for (let i = 0; i < oDatos.length; i++) {
            console.log(oDatos[i].nControl);
            $("#tablaPerfil").append("<tr>");
            $("#tablaPerfil").append("<td style='color:black'>" + oDatos[i].nControl + "</td>");
            $("#tablaPerfil").append("<td style='color:black'>" + oDatos[i].carrera + "</td>");
            $("#tablaPerfil").append("<td style='color:black'>" + oDatos[i].disciplina + "</td>");
            $("#tablaPerfil").append("</tr>");
          }

        }
      });
    }

    /**Funcion para abrir el modal de aistencia */
    function showModalAsistencia() {
      let ajaxFechaAsistencia = $.ajax({
        type: 'POST',
        datatype: "json",
        data: {
          funcion: 'checarFechaAsistecia',
          NControl: nControlSesion
        },
        url: "Controller/UsuarioController.php"
      });
      ajaxFechaAsistencia.done(function(event) {
        let oFecha = JSON.parse(event);
        let dFechaHoy = new Date().toISOString().slice(0, 10);
        if (oFecha[0].dFecha == dFechaHoy) {
          alert("Solo puede tomar una asistencia por dia");
        } else {
          $("#sNControlAsistencia").val(oFecha[0].sNControl_Usuario);
          $("#modalAsistencia").modal('show');
        }
      });

    }


    //Funcion para registrar la asistencia por dia en la base de datos
    function enviarAsistencia() {
      if (document.getElementById('checkPresente').checked) {
        let ajaxAsistencia = $.ajax({
          type: "POST",
          datatype: "json",
          data: {
            funcion: 'insertarAsistencia',
            NControl: nControlSesion,
            dFecha: new Date().toISOString().slice(0, 10)

          },
          url: "Controller/UsuarioController.php"
        });
        ajaxAsistencia.done(function(event) {
          let oRespuesta = JSON.parse(event);
          if (oRespuesta == true) {
            $("#modalAsistencia").modal('hide');
            alert("Asistencia exitosa");
          } else {
            alert("Error al registrar su asistencia");
          }
        });
      } else {
        alert("No ha seleccionado la asistencia");
      }
    }

    function showModalEvidencia() {
      $("#modalEvidencia").modal('show');
      $("#nControlEvidencia").val(nControlSesion);
    }
  </script>


  <?php
  include_once '../../db/conexion.php';
  if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_FILES)) {
    $check = @getimagesize($_FILES['foto']['tmp_name']);
    if ($check !== false) {
      $carpeta_destino = 'Evidencias/';
      $archivo_subida = $carpeta_destino . $_FILES['foto']['name'];
      move_uploaded_file($_FILES['foto']['tmp_name'], $archivo_subida);
      $statement = $conexion->prepare('
            INSERT INTO fotos(numControl,imagen,hora) 
            values (:numControl,:imagen,:hora) ');

      $statement->execute(array(
        ':numControl' => $_POST['nControlEvidencia'],
        ':imagen' => $_FILES['foto']['name'],
        ':hora' => $_POST['hora']
      ));
      echo '<script type="text/javascript">
        alert("Evidencia Guardada con exito!");
        </script>';
    } else {
      $error .= "El archivo no es una imagen o el archivo es muy pesado";
    }
  }
  ?>

  <!-- libreria moment -->
  <script src="../../includes/moment-develop/moment.js"></script>

  <!-- implemento script de bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>

</body>

</html>