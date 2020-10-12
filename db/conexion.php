<?php 

try{
   //$conexion = new PDO('mysql:host=localhost;dbname=entrenamientopag', 'root','');
    $conexion = new PDO('mysql:host=localhost;dbname=id14773293_paginaentrenamiento','id14773293_basquetbol123','Equipotiburones123@');
    // echo 'Conexion con exito';
}catch(PDOException $e){
    echo "Error: " .$e->getMessage();
}

?>