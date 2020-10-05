<?php session_start();

if (isset($_SESSION['usuario'])) {
    include_once 'entrenar.php';
}else{
    header('Location: ../login/login.php');
}

?>