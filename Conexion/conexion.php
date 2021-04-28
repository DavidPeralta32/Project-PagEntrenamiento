<?php

class Conexion {
    //local
    // private $servername = "localhost" ;
    // private $username = "root";
    // private $password = "";
    // private $dbname = "entrenamientopag";

    //hosting
    private $servername = "localhost" ;
    private $username = "u872169774_tiburonesblan";
    private $password = "Tiburon06";
    private $dbname = "u872169774_tiburones";
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