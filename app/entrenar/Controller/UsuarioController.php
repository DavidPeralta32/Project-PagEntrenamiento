<?php

include_once '../Model/UsuarioModel.php';

if($_SERVER['REQUEST_METHOD']== "POST"){
    $oCUsuario = new UsuarioController();

    $sFuncion = $_POST['funcion'];

    switch ($sFuncion) {
        case 'listarUsuarioId':
                echo json_encode($oCUsuario->listarUsuarioPorId());
            break;

        case 'insertarAsistencia':
            echo json_encode($oCUsuario->insertarAsistenciaUsuario());
            break;
        
        default:
            # code...
            break;
    }
}

class UsuarioController{
    private $oUsuario;

    public function __construct()
    {
        $this->oUsuario = new UsuarioModel();
    }

    public function listarUsuarioPorId(){
        $this->oUsuario->setNControl($_POST['NControl']);
        $aResultado = $this->oUsuario->listarUserId();
        while($row = $aResultado ->fetch_assoc()){
            $aResul[]= $row;
        }
        return $aResul;
    }

    public function insertarAsistenciaUsuario(){
        $this->oUsuario-> setNControl($_POST['NControl']);
        $this->oUsuario-> setFechaAsistencia($_POST['dFecha']);
        $aResultado = $this->oUsuario->insertarAsistencia();
        return $aResultado;
    }
}

?>