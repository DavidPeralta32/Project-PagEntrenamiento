<?php session_start();

if (isset($_SESSION['usuario'])) {
    $usuario = $_SESSION['usuario'];
    include_once 'views/entrenar.php';
}else{
    header('Location: ../login/login.php');
}

?>