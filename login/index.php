<?php
$errores = '';
$enviado = '';

require_once '../db/conexion.php';



if(isset($_POST['submit'])){
    $nControl = $_POST['nControl'];
    $password = $_POST['password'];

    if (!empty($nControl)) {
        $nControl = trim($nControl);
        $nControl = filter_var($nControl,FILTER_SANITIZE_STRING);
    }else{
        $errores .= 'escribe un numero de control <br />';
    }
    if(!empty($password)){
        $password = trim($password);
        $password = filter_var($password,FILTER_SANITIZE_STRING);
    }else{
        $errores .= 'Contraseña incorrecta <br />';
    }
    if (!$errores) {
        $enviado = true;
    }

}

require_once 'indexforma.php';
?>