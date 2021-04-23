<?php

include_once '../../Conexion/conexion.php';

class indexModel extends Conexion{

    public function __construct(){
        parent::__construct();
    }

    public function listarUsuarios(){
        $sql ="SELECT * FROM usuarios";
       $aResultado = $this->conn->query($sql);
       return $aResultado;
       $this->conn->close();
    }

    public function editarUsuario($nIdUsuario,$sNombre,$sApellido,$sCarrera,$sDisciplina,$nAsistencia){
        $sql = "UPDATE usuarios SET nombreUsuario = '$sNombre' , apellidoUsuario = '$sApellido',
         carrera = '$sCarrera', disciplina = '$sDisciplina', asistencia = '$nAsistencia'
         WHERE idUsuarios = '$nIdUsuario' ";
        $aResultado = $this->conn->query($sql);
        return $aResultado;
    }

    public function verUsuario($nIdUsuario){
        $sql = "SELECT * FROM usuarios WHERE idUsuarios = '$nIdUsuario'";
        $aResultado = $this->conn->query($sql);
        return $aResultado;
        $this->conn->close();
    }

}


?>