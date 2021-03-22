<?php

class Conexion {
    private $servername = "localhost" ;
   private $username = "root";
   private $password = "";
   private $dbname = "entrenamientopag";
   public $conn;
   
   public function __construct() {
       $this->conexion();
    }
    
    public function conexion(){
        $this->conn = mysqli_connect(
                $this->servername,
                $this->username,
                $this->password,
                $this->dbname
                );
        if(!$this->conn){
            echo "Error al conectarse con la base de datos";
        }else{
            //echo "Conexion exitosa <br/>";
        }
    }
    

}

?>