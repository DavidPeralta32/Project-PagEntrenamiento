<?php 

require_once '../../../Conexion/conexion.php';

class UsuarioModel extends Conexion {

    private $nIdUsuario;
    private $sNControl;
    private $sNombreUsuario;
    private $sApellidoUsuario;
    private $sPassword;
    private $sCarrera;
    private $sDisciplina;
    private $nAsistencia;

    public function __construct()
    {
        parent:: __construct();
    }

    public function listarUserId(){
        $sControl = $this->getNControl();
        $aResultado = $this->conn->query("SELECT * from usuarios where nControl = '$sControl'");
        return $aResultado;
    }



    public function getIdUsuario() {
        return $this->nIdUsuario;
    }

    public function getNControl() {
        return $this->sNControl;
    }

    public function getNombreUsuario() {
        return $this->sNombreUsuario;
    }

    public function getApellioUsuario() {
        return $this->sApellidoUsuario;
    }

    public function getPassword() {
        return $this->sPassword;
    }

    public function getCarrera() {
        return $this->sCarrera;
    }

    public function getDisciplina() {
        return $this->sDisciplina;
    }

    public function getAsistencia() {
        return $this->nAsistencia;
    }

    public function setIdUsuario($nIdUsuario) {
        $this->nIdUsuario = $nIdUsuario;
    }

    public function setNControl($sNControl) {
        $this->sNControl = $sNControl;
    }

    public function setNombreUsuario($sNombreUsuario) {
        $this->sNombreUsuario = $sNombreUsuario;
    }

    public function setApellido($sApellidoUsuario) {
        $this->sApellidoUsuario = $sApellidoUsuario;
    }

    public function setPassword($sPassword) {
        $this->sPassword = $sPassword;
    }

    public function setCarrera($sCarrera) {
        $this->sCarrera = $sCarrera;
    }

    public function setDisciplina($sDisciplina) {
        $this->sDisciplina = $sDisciplina;
    }

    public function setAsistencia($nAsistencia) {
        $this->nAsistencia = $nAsistencia;
    }


}



?>