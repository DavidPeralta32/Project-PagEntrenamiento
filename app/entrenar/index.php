<?php session_start();

if (isset($_SESSION['usuario'])) {
    header('Location: entrenar.php');
}else{
    header('Location: ../index.php');
}

?>