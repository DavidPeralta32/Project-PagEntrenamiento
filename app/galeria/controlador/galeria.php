<?php session_start();

if (!isset($_SESSION['usuario'])) {
    header('Location: ../../entrenar/index.php');
}

require_once '../../../db/conexion.php';
$fotos_por_pagina = 8;

$pagina_actual = (isset($_GET['p']) ? (int)$_GET['p'] : 1 );
$inicio = ($pagina_actual > 1) ? $pagina_actual * $fotos_por_pagina - $fotos_por_pagina : 0;


if(!$conexion){
    die();
}

$statement =$conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * from fotos LIMIT $inicio, $fotos_por_pagina");

$statement->execute();
$fotos = $statement->fetchAll();

if(!$fotos){
    // header('Location: index.php');
}

$statement = $conexion->prepare("SELECT FOUND_ROWS() as total_filas");
$statement->execute();
$total_post = $statement->fetch()['total_filas'];

$total_paginas = ceil($total_post / $fotos_por_pagina);


require_once '../views/galeria.view.php';
?>