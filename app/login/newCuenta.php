<?php session_start();

function limpiarCampo($valor){
    $valor = trim($valor);
    $valor = htmlspecialchars($valor);
    return $valor;
}

include_once '../../db/conexion.php';

if ($_SERVER['REQUEST_METHOD']=='POST') {
    $nControlUsuario = $_POST['nControlUsuario'];
    $nombreUsuario = $_POST['nombreUsuario'];
    $apellidoP = $_POST['apellidoPUsuario'];
    $password = $_POST['passwordUsuario'];
    $password2 = $_POST['passwordUsuario2'];
    $disciplina = $_POST['disciplinaUsuario'];
    $carrera = $_POST['carreraUsuario'];
    

    $errores = '';
    
    $expresion = "/^E[0-9]{8}$/";
    if (empty($nControlUsuario) and preg_match ($expresion,$nControlUsuario) or empty($nombreUsuario) or empty($apellidoP) or empty($password) or empty($password2) or empty($disciplina) or empty($carrera)) {
        $errores .= '<li>Por favor de rellenar todos los campos </li>';
    }else{

        $statement = $conexion->prepare('SELECT * from usuarios Where nControl = :nControl');
        $statement->execute(array(':nControl' => $nControlUsuario));
        $resultado = $statement->fetch();

        if ($resultado != false) {
            $errores .= '<li>Este numero de control ya ha sido registrado </li>';
        }

        if ($password != $password2) {
            $errores .= '<li>Las contraseñas no coinciden</li>';
        }

    }
    if (empty($errores)) {
        $statement = $conexion->prepare('INSERT INTO usuarios (idUsuarios,nControl,nombreUsuario,apellidoUsuario,passwordUsuario,carrera,disciplina,asistencia)
                                            VALUES (null,:ncontrol,:nombre,:apellido,:pass,:carrera,:disciplina,:asistencia)');
        $statement->execute(array(
            ':ncontrol' => $nControlUsuario,
            ':nombre' => $nombreUsuario,
            ':apellido' => $apellidoP,
            ':pass' => $password,
            ':carrera' => $carrera,
            ':disciplina' => $disciplina,
            ':asistencia' =>"0")
        );
        
        header('Location: login.php');
    }

    
}

require_once 'viewsLogin/newCuentaforma.php';
?>