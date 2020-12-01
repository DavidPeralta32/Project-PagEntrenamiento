<?php session_start();

include_once '../db/conexion.php';


    try {
        $stmt = $conexion->prepare("SELECT * FROM usuarios");
        $stmt->execute( );
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch(PDOException $ex) {
        echo "Ocurrió un error<br>";
        echo $ex->getMessage();
        exit;
    }


include_once 'index.view.php';

?>