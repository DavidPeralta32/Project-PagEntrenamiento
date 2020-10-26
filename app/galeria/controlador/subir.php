<?php  session_start();

    if (!isset($_SESSION['usuario'])) {
        header('Location: ../../entrenar/index.php');
    }

include_once '../../../db/conexion.php';





if (!$conexion) {
    die();
}
 $error='';
 
if($_SERVER['REQUEST_METHOD']== 'POST' && !empty($_FILES)){
    $check = @getimagesize($_FILES['foto']['tmp_name']);
    if($check !== false){
        $carpeta_destino = '../fotos/';
        $archivo_subida = $carpeta_destino . $_FILES['foto']['name'];
        move_uploaded_file($_FILES['foto']['tmp_name'],$archivo_subida);
        $statement = $conexion->prepare('
        INSERT INTO fotos(numControl,imagen,hora) 
        values (:numControl,:imagen,:hora) ');

        $statement->execute(array(
            ':numControl' => $_POST['numControl'],
            ':imagen' => $_FILES['foto']['name'],
            ':hora' => $_POST['hora']
        ));
        header('Location: galeria.php');
    }else{
        $error .= "El archivo no es una imagen o el archivo es muy pesado";
    }
    

}

include_once '../views/subir.view.php';
?>