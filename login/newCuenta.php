<?php
function limpiarCampo($valor){
    $valor = trim($valor);
    $valor = htmlspecialchars($valor);
    return $valor;
}

$enviado = '';
$errores = '';

if(isset($_POST['submit'])){
    $nControlUsuario = $_POST['nControlUsuario'];
    $nombreUsuario = $_POST['nombreUsuario'];
    $apellidoP = $_POST['apellidoPUsuario'];
    $password = $_POST['passwordUsuario'];
    $carrera = $_POST['carreraUsuario'];

    $expresion = "/^[E,A][0-9]{8}$/";
    $nControlUsuario = limpiarCampo($nControlUsuario);
    if (!empty($nControlUsuario) and preg_match($expresion,$nControlUsuario)) {
    }else{
        $errores .= 'Numero de control incorrecto';
    }
    if (!empty($nombreUsuario)) {
        $nombreUsuario = limpiarCampo($nombreUsuario);
    }else{
        $errores .= 'Escribe tu nombre';
    }
    if (!empty($apellidoP)) {
        $apellidoP = limpiarCampo($apellidoP);
    }else{
        $errores .= 'Escribe tu apellido';
    }
    if (!empty($password)) {
        $password = limpiarCampo($password);
    }else{
        $errores .= 'Escribe una contraseña';
    }
    if (!empty($carrera)) {
        $carrera = limpiarCampo($carrera);
    }else{
        $errores .= 'Escribe tu carrera';
    }
    if (!$errores) {
        $enviado = true;
    }
}


require_once 'newCuentaforma.php';
?>