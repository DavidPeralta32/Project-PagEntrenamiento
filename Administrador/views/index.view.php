<html>
<head>
  <meta charset="UTF-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://kit.fontawesome.com/32258d33f0.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./css/index.css">
  <title>Lista de alumnos Asu</title>
  <script>
    $(document).ready(function() {
      listarUsuarios();

    });
  </script>
</head>

<body>
  <div class="icono-menu">
    <img src="img/open-menu.png" id="icono-menu">
  </div>
  <div class="cont-menu active" id="menu">
    <ul>
      <li> <a href="../login/cerrar.php">Cerrar sesion</a></li>
    </ul>
  </div>

  <div class="contenedor-lista" style="width: 100%; display:flex; justify-content:center">


    <div class="contenido-lista" style="width:80%;">
      <div class="jumbotron jumbotron-fluid">
        <div class="container" style="text-align:center;">
          <h1 class="display-4">Lista de Alumnos</h1>
          <p class="lead">Se muestran los usuarios y su informacion asi como el total de asistencia</p>
        </div>
      </div>
      <div class="buscador">
        <label for=""> <strong>N.-Control:</strong></label>
        <input type="text" id="sBuscar">
        <button onclick=" buscarUsuario()" id="btnBuscar">Buscar</button>
        <button onclick="limpiarBuscador()" id="btnLimpiar">Limpiar</button>
      </div>
      <div class="table">
        <!-- <a href="../login/cerrar.php">Cerrar sesion</a> -->
        <table class="table table-striped table-dark" style="text-align:center;">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">N.- Control</th>
              <th scope="col">Nombre</th>
              <th scope="col">Apellido</th>
              <th scope="col">Password</th>
              <th scope="col">Carrera</th>
              <th scope="col">Disciplina</th>
              <th scope="col">Porcentaje</th>
              <th scope="col">Opciones</th>
            </tr>
          </thead>
          <tbody id="misUsuarios">

          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- Modal ver usuario -->
  <div class="modal fade" id="modalVerUsuario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Usuario</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="col-6">
              <label for="exampleInputEmail1" class="form-label">Numero Control</label>
              <input type="text" class="form-control" id="sNumControl" readonly>
            </div>
            <div class="row g-3 align-items-center">
              <div class="col-6">
                <label for="exampleInputPassword1" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="sNombre" readonly>
              </div>
              <div class="col-6">
                <label for="exampleInputPassword1" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="sApellido" readonly>
              </div>
              <div class="col-6">
                <label for="exampleInputPassword1" class="form-label">Carrera</label>
                <input type="text" class="form-control" id="sCarrera" readonly>
              </div>
              <div class="col-6">
                <label for="exampleInputPassword1" class="form-label">Total Asistencias</label>
                <input type="text" class="form-control" id="nAsistencia" readonly>
              </div>
              <div class="col-6">
                <label for="exampleInputPassword1" class="form-label">Total Evidencias</label>
                <input type="text" class="form-control" id="nEvidencias" readonly>
              </div>
            </div>

          </form>
          <div class="row-galeria">
            <div class="colum-galeria" id="galeriaPerfil">
              
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Termina modal ver usuario -->

  <!-- Modal Editar usuario -->
  <div class="modal fade" id="modalEditarUsuario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Editar Usuario</h5>
        </div>
        <div class="modal-body">
          <form>
            <div class="col-6">
              <label for="exampleInputEmail1" class="form-label">Numero Control</label>
              <input type="text" class="form-control" id="editarNumControl" readonly>
              <input type="hidden" class="form-control" id="editarnIdUsuario" readonly>
            </div>
            <div class="row g-3 align-items-center">
              <div class="col-6">
                <label for="exampleInputPassword1" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="editarNombre">
              </div>
              <div class="col-6">
                <label for="exampleInputPassword1" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="editarApellido">
              </div>
              <div class="col-6">
                <label for="exampleInputPassword1" class="form-label">Carrera</label>
                <input type="text" class="form-control" id="editarCarrera">
              </div>
              <div class="col-6">
                <label for="exampleInputPassword1" class="form-label">Asistencia</label>
                <input type="text" class="form-control" id="editarAsistencia">
              </div>
              <div class="col-6">
                <label for="exampleInputPassword1" class="form-label">Disciplina</label>
                <input type="text" class="form-control" id="editarDisciplina">
              </div>
            </div>

          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-success" data-bs-dismiss="modal" id="btnActualiar" onclick="actualizarUsuario()">Actualizar</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Termina modal Editar usuario -->

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
  <script src="./JS/indexView.js"></script>
</body>

</html>