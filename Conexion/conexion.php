<?php

class Conexion {
    //local
    //  private $servername = "localhost" ;
    //  private $username = "root";
    //  private $password = "";
    //  private $dbname = "entrenamientopag";
    //  public $conn;
     
    //hosting
     private $servername = "localhost" ;
     private $username = "u163709318_tiburon";
     private $password = "Tiburon06";
     private $dbname = "u163709318_paginaEntrena";
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