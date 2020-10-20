<?php

require_once '../../../db/conexion.php';
if (!$conexion) {
    die ();
}

$id = isset($_GET['id']) ? (int)$_GET['id'] : false;

if (!$id) {
    header('Location: index.php');
}

$statement = $conexion-> prepare('SELECT * from fotos WHERE id = :id');
$statement->execute(array(':id' => $id));

$foto = $statement->fetch();

if(!$foto){
    header('Location: galeria.php');
}


require_once '../views/foto.view.php';


?>