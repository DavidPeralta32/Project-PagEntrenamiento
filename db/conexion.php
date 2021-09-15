<?php 



try{
   $conexion = new PDO('mysql:host=localhost;dbname=entrenamientopag', 'root','');
    //$conexion = new PDO('mysql:host=localhost;dbname=u872169774_tiburones','u872169774_tiburonesblan','Tiburon06');
    // echo 'Conexion con exito';
}catch(PDOException $e){
    echo "Error: " .$e->getMessage();
}

?>