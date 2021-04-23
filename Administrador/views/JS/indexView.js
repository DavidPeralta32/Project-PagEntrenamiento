

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
            $("#misUsuarios").append("<td> <input type='hidden' id='nIdUsuario_"+obj.idUsuarios+"' value="+ obj.idUsuarios + ">\n\
            <button type='button' onclick='verUsuario("+obj.idUsuarios+")' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#modalVerUsuario'> Ver </button>\n\
            <button type='button' onclick='editarUsuario("+obj.idUsuarios+")' class='btn btn-warning' data-bs-toggle='modal' data-bs-target='#modalEditarUsuario' style='color:white;' > Editar </button></td>");
            $("#misUsuarios").append("</tr>");
        });
    });
}

function verUsuario(nIdUsuario){
    let _ajaxVerUsuario = $.ajax({
        type: "POST",
        datatype : "json",
        data: {function : "verUsuario",
                usuario: $("#nIdUsuario_"+nIdUsuario).val()
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
                $("#nAsistencia").val(oDatos[0].asistencia);

        }
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

// $("#btnActualiar").click(function(){
//     actualizarUsuario();
// });

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