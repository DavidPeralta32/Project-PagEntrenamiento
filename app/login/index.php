<?php session_start();

if (isset($_SESSION['usuario'])) {
    header('Location: ../entrenar/index.php');
}else{
   header('Location: login.php'); 
}

?>