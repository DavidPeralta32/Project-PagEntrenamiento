<?php 

try{
    $conexion = new PDO('mysql:host=localhost;dbname=entrenamientopag', 'root','');
    echo 'Conexion con exito';
   
}catch(PDOException $e){
    echo "Error: " .$e->getMessage();
}

?>