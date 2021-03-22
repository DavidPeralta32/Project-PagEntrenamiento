<?php session_start();

if (isset($_SESSION['admin'])) {
    header("Location: ../views/index.view.php");
}else{
   header('Location: login.php'); 
}

?>