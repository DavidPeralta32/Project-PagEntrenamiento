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
        $sql = "SELECT * FROM usuarios WHERE nControl = '$nIdUsuario'";
        $aResultado = $this->conn->query($sql);
        return $aResultado;
        $this->conn->close();
    }

    public function buscarUsuario($NControl){
        $sNControl = $NControl;
        $sql = "SELECT * FROM usuarios WHERE nControl = '$sNControl'";
        $aResultado = $this->conn->query($sql);
        return $aResultado;
        
    }

    public function totalAsistenciaYEvidencia($NControl){
        $sNControl = $NControl;
        $sql = " SELECT u.ncontrol, a.nAsistencia as totalAsistencia , COUNT(f.imagen) as totalEvidencia from usuarios as u INNER JOIN asistencia as a ON a.sNControl_Usuario = u.nControl INNER JOIN fotos as f ON f.numControl = u.nControl WHERE u.nControl = '$sNControl'";
        return $aResultado = $this->conn->query($sql);
    }

}


?>