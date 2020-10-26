<?php session_start();

if (isset($_SESSION['usuario'])) {
    header('Location: index.php');
}

include_once '../../db/conexion.php';

if($_SERVER['REQUEST_METHOD']=='POST'){

    $nControl = $_POST['nControl'];
    $password = $_POST['password'];

    $errores = '';
    if (!empty($nControl)) {
        $nControl = trim($nControl);
        $nControl = filter_var($nControl,FILTER_SANITIZE_STRING);
    }else{
        $errores .= '<li>escribe un numero de control <li />';
    }
    if(!empty($password)){
        $password = trim($password);
        $password = filter_var($password,FILTER_SANITIZE_STRING);
    }else{
        $errores .= '<li>Contraseña incorrecta <li />';
    }
    if (empty($errores)) {
        
        $statement = $conexion->prepare('SELECT * from usuarios where nControl= :ncontrol and passwordUsuario= :pass');
        $statement->execute(array(
            ':ncontrol'=> $nControl,
            ':pass' => $password
        ));
        $resultado = $statement->fetch();
        
        if ($resultado !==false) {
            $_SESSION['usuario'] = $nControl;
            header("Location: index.php");
        }else{
            $errores .= '<li>Usuario y/o Contraseña incorrectos</li>';
        }
    }


}

require_once 'viewsLogin/loginforma.php';
?>