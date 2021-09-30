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
          <a class='nav-link'><button style="background: none;border:none;color:white;" id="Perfil" onclick="ShowDatosPerfil()">Perfil</button></a>
        </li>
        <li class="nav-item">
          <a class='nav-link' href="../galeria/controlador/subir.php"><button style="background: none;border:none;color:white;" id="Perfil" onclick="">Evidencia</button></a>
        </li>
        <li class="nav-item">
          <a class='nav-link'><button style="background: none;border:none;color:white;" id="btn_asistencia" onclick="showModalAsistencia()">Asistencia</button></a>
        </li>
        <li class="nav-item">
          <a class='nav-link' style='color:white' href="../login/cerrar.php">Cerrar Sesion</a>
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
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
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
          <h5 class="modal-title" id="nombrePerfil"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="contenedor-asistencia" style="width: 100%; display:flex;flex-wrap:wrap ;justify-content: center;">
            <h1>Asistencia</h1>
            <p>Pase de asistencia, favor de introducir <strong>una asistencia por sesion.</strong> </p>

            <form>
              <div class="form-group">
                <label for="exampleFormControlInput1">Numero de Control</label>
                <input type="text" class="form-control" name="nControl" id="exampleFormControlInput1" placeholder="Num. Control">
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" name="presente" id="inlineCheckbox1" value="presente" checked>
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
                <button type="button" onclick="enviarAsistencia()" class="btn btn-primary">Enviar</button>
              </div>
            </form>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Fin modal asistencia -->




  <script>
    /**variable que contiene el numero de control
    el que se inicio sesion
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
      $("#modalAsistencia").modal('show');
    }

    function enviarAsistencia() {
      let ajaxAsistencia = $.ajax({
        type: "POST",
        datatype: "json",
        data: {
          funcion: 'insertarAsistencia',
          NControl: nControlSesion,
          dFecha : new Date().toISOString().slice(0, 10)
          
        },
        url: "Controller/UsuarioController.php"
      });
      ajaxAsistencia.done(function(event) {
        let oRespuesta = JSON.parse(event);
        alert(oRespuesta);
      })
    }

    function verHora() {
      let horasHoy = moment().format('HH');
      var fechaHoy = moment();
      console.log("fecha hoy " + fechaHoy.format('DD/MM/YYYY HH:mm'));
      if (horasHoy >= 17 && horasHoy <= 20) {
        alert("puede tomar asistencia");
      } else if (horasHoy > 12) {
        var fechaProximaAsistencia = moment().add(1, 'd');
        console.log("fecha mañana " + fechaProximaAsistencia.format('DD/MM/YYYY HH:mm'));
        var faltante = fechaProximaAsistencia.diff(fechaHoy,'hours');
        alert("no puede tomar asistencia hasta dentro de " + faltante +" horas");
      } else {

      }
    }
  </script>
  <!-- libreria moment -->
  <script src="../../includes/moment-develop/moment.js"></script>

  <!-- implemento script de bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>

</body>

</html>