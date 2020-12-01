<?php session_start();

// if (isset($_SESSION['usuario'])) {
//     header('Location: index.php');
// }

include_once '../../db/conexion.php';

$errores= "";

if ($_SERVER['REQUEST_METHOD']=='POST') {

    $nControl = $_POST['nControl'];
    $accion = $_POST['presente'];
    

    if (empty($accion)) {
        $errores .= '<li>Seleccione una opcion de asistencia</li>';
    }
    
    if (empty($nControl)) {
        $errores .= '<li>Ingresa su numero de control correcto</li>';
    }

    if(empty($errores)) {
        $statement = $conexion->prepare('UPDATE usuarios set asistencia=asistencia+1 where nControl= :numControl');
        $statement->execute(array(
            ':numControl'=> $nControl
        ));
        $exito="Asistencia exitosa";
    }
}




include 'asistencia.view.php';
?>