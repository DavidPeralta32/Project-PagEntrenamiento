<?php 



try{
   //$conexion = new PDO('mysql:host=localhost;dbname=entrenamientopag', 'root','');
    $conexion = new PDO('mysql:host=localhost;dbname=u163709318_paginaEntrena','u163709318_tiburon','Tiburon06');
    // echo 'Conexion con exito';
}catch(PDOException $e){
    echo "Error: " .$e->getMessage();
}

?>