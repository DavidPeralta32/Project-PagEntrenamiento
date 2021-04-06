

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
            <button type='button' onclick='verUsuario("+obj.idUsuarios+")' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#modalVerUsuario'> Ver </button></td>");
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