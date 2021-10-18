

function listarUsuarios(){
    var _miObjAjax = $.ajax({
        type: "POST",
        datatype : "json",
        data : {function : "listarUsuarios"},        
        url: '../controller/indexController.php/listarUsuarios'
    });
    _miObjAjax.done(function (event){
        let oDatos = $.parseJSON (event);
        $.each( oDatos ,function(index , obj){
            $("#misUsuarios").append("<tr>");
            $("#misUsuarios").append("<td>" + obj.idUsuarios + "</td>");
            $("#misUsuarios").append("<td>" + obj.nControl + "</td>");
            $("#misUsuarios").append("<td>" + obj.nombreUsuario + "</td>");
            $("#misUsuarios").append("<td>" + obj.apellidoUsuario + "</td>");
            $("#misUsuarios").append("<td>" + obj.passwordUsuario + "</td>");
            $("#misUsuarios").append("<td>" + obj.carrera + "</td>");
            $("#misUsuarios").append("<td>" + obj.disciplina + "</td>");
            $("#misUsuarios").append("<td>" + obj.asistencia + "</td>");
            $("#misUsuarios").append("<td> <input type='hidden' id='nIdUsuario_"+obj.idUsuarios+"' value="+obj.nControl+ ">\n\
            <button type='button' onclick='verUsuario("+obj.idUsuarios+")' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#modalVerUsuario'> Ver </button>\n\
            <button type='button' onclick='editarUsuario("+obj.idUsuarios+")' class='btn btn-warning' data-bs-toggle='modal' data-bs-target='#modalEditarUsuario' style='color:white;' > Editar </button></td>");
            $("#misUsuarios").append("</tr>");
        });
    });
}

function verUsuario(idUsuarios){
    let nControl = $("#nIdUsuario_"+idUsuarios).val();
    let _ajaxVerUsuario = $.ajax({
        type: "POST",
        datatype : "json",
        data: {function : "verUsuario",
                usuario: $("#nIdUsuario_"+idUsuarios).val()
            },
        url: '../controller/indexController.php/verUsuario'   
    });
    _ajaxVerUsuario.done(function(event){
        let oDatos = JSON.parse(event);
        if(oDatos.length != 0){
            $("#sNumControl").val(oDatos[0].nControl);
            $("#sNombre").val(oDatos[0].nombreUsuario);
            $("#sApellido").val(oDatos[0].apellidoUsuario);
            $("#sCarrera").val(oDatos[0].carrera);  
        }
        totalEvidencias(nControl);
        evidenciasPorUsuario(nControl);
    });
}

function editarUsuario(nIdUsuario){
    let _ajaxEditarUsuario = $.ajax({
        type: "POST",
        datatype: "json",
        data: {
            function:"editarUsuario",
            usuario: $("#nIdUsuario_"+nIdUsuario).val()
        },
        url: '../controller/indexController.php/verUsuario'
    });
    _ajaxEditarUsuario.done(function (event){
        let oDatos = JSON.parse(event);
        if(oDatos.length != 0){
            $("#editarnIdUsuario").val(oDatos[0].idUsuarios);
            $("#editarNumControl").val(oDatos[0].nControl);
            $("#editarNombre").val(oDatos[0].nombreUsuario);
            $("#editarApellido").val(oDatos[0].apellidoUsuario);
            $("#editarCarrera").val(oDatos[0].carrera);
            $("#editarAsistencia").val(oDatos[0].asistencia);
            $("#editarDisciplina").val(oDatos[0].disciplina);
        }
    });
}

function actualizarUsuario(){
    let _ajaxActuaizaUsuario = $.ajax({
        type:"POST",
        datatype: "json",
        data:{
            function:"actualizaUsuario",
            usuario:$("#editarnIdUsuario").val(),
            nombre:$("#editarNombre").val(),
            apellido:$("#editarApellido").val(),
            carrera:$("#editarCarrera").val(),
            asistencia:$("#editarAsistencia").val(),
            disciplina:$("#editarDisciplina").val()
        },
        url: "../controller/indexController.php/actualizaUsuario"
    });
    _ajaxActuaizaUsuario.done(function(event){
        let oDatos = JSON.parse(event);
        if(oDatos === true){
            alert("Actualizado correctamente");
            $("#misUsuarios").empty();
            listarUsuarios();
        }
        
    })}

    function buscarUsuario(){
        const sBuscarUsuario = document.querySelector("#sBuscar").value;
        if(sBuscarUsuario != ''){
        let ajaxBuscarUsuario = $.ajax({
            type: "POST",
            datatype: "JSON",
            data: {
                function : "buscarUsuario",
                nControl: $("#sBuscar").val()
            },
            url : "../controller/indexController.php/buscarUsuarioControl"
        });
        ajaxBuscarUsuario.done(function(event){
            const oDatos = JSON.parse(event);
            if (oDatos != 'Error') {
                $("#misUsuarios").empty();
                $.each( oDatos ,function(index , obj){
                    $("#misUsuarios").append("<tr>");
                    $("#misUsuarios").append("<td>" + obj.idUsuarios + "</td>");
                    $("#misUsuarios").append("<td>" + obj.nControl + "</td>");
                    $("#misUsuarios").append("<td>" + obj.nombreUsuario + "</td>");
                    $("#misUsuarios").append("<td>" + obj.apellidoUsuario + "</td>");
                    $("#misUsuarios").append("<td>" + obj.passwordUsuario + "</td>");
                    $("#misUsuarios").append("<td>" + obj.carrera + "</td>");
                    $("#misUsuarios").append("<td>" + obj.disciplina + "</td>");
                    $("#misUsuarios").append("<td>" + obj.asistencia + "</td>");
                    $("#misUsuarios").append("<td> <input type='hidden' id='nIdUsuario_"+obj.idUsuarios+"' value="+ obj.nControl + ">\n\
                    <button type='button' onclick='verUsuario("+obj.idUsuarios+")' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#modalVerUsuario'> Ver </button>\n\
                    <button type='button' onclick='editarUsuario("+obj.idUsuarios+")' class='btn btn-warning' data-bs-toggle='modal' data-bs-target='#modalEditarUsuario' style='color:white;' > Editar </button></td>");
                    $("#misUsuarios").append("</tr>");
                });
            }else{
                $("#misUsuarios").empty();
                $("#misUsuarios").append("<tr><td colspan = '9'>No se encontro ningun registro</td></tr>");
            }
        });
    }else{
        
    }
    }

    function limpiarBuscador(){
        $("#sBuscar").val("");
        $("#misUsuarios").empty();
        listarUsuarios()
    }

    function totalEvidencias(sNcontrol){
        let ajaxTotalEvidencias = $.ajax({
            type: "POST",
            datatype: "json",
            data :{
                function: 'totalEvidencias',
                nControl: sNcontrol
            },
            url: "../controller/indexController.php/TotalEvidenciaYAsistencia"
        });
        ajaxTotalEvidencias.done(function(event){
            const oTotal = JSON.parse(event);
            if(oTotal != 'Error'){
                $("#nAsistencia").val(oTotal[0].totalAsistencia);
                $("#nEvidencias").val(oTotal[0].totalEvidencia);
            }
        });
    }

    /**
     * funcion para traer las fotos por nControl
     */
     function evidenciasPorUsuario(nControl){
        let ajaxEvidenciaPorUsuario =  $.ajax({
          type: "POST",
          datatype: "JSON",
          data: {
            funcion :'evidenciaUsuario',
            NControl : nControl
          },
          url : "../../app/entrenar/Controller/UsuarioController.php"
        });
        ajaxEvidenciaPorUsuario.done(function(event){
          const oEvidencias = JSON.parse(event);
          $("#galeriaPerfil").empty();
          if (oEvidencias == 'Error') {
            $("#galeriaPerfil").append("<h3 style='color:red;'>No tiene evidencias :(</h3>");
          }else{
            oEvidencias.forEach(evidencia => {
              $("#galeriaPerfil").append("<img src='../../app/entrenar/Evidencias/"+evidencia.imagen+"' alt=''>");
            });
            
          }
        });
      }
  

    //Menu hambuerguesa

const iconoMenu = document.querySelector('#icono-menu'),
    menu = document.querySelector("#menu");

    iconoMenu.addEventListener('click', (e)=>{
        menu.classList.toggle('active');
        document.body.classList.toggle('opacity');

         const rutaActual = e.target.getAttribute('src');

         if(rutaActual == 'img/open-menu.png'){
             e.target.setAttribute('src','img/open-menu2.png');
         }else{
             e.target.setAttribute('src','img/open-menu.png');

         }

    });