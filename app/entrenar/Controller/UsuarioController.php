<?php

include_once '../Model/UsuarioModel.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $oCUsuario = new UsuarioController();

    $sFuncion = $_POST['funcion'];

    switch ($sFuncion) {
        case 'listarUsuarioId':
            echo json_encode($oCUsuario->listarUsuarioPorId());
            break;

        case 'insertarAsistencia':
            echo json_encode($oCUsuario->insertarAsistenciaUsuario());
            break;

        case 'checarFechaAsistecia':
            echo json_encode($oCUsuario->verFechaAsistencia());
            break;

        case 'subirEvidencia':
            echo json_encode($oCUsuario-> insertarEvidencia());
            break;

        default:
            # code...
            break;
    }
}

class UsuarioController
{
    private $oUsuario;

    public function __construct()
    {
        $this->oUsuario = new UsuarioModel();
    }

    public function listarUsuarioPorId()
    {
        $this->oUsuario->setNControl($_POST['NControl']);
        $aResultado = $this->oUsuario->listarUserId();
        while ($row = $aResultado->fetch_assoc()) {
            $aResul[] = $row;
        }
        return $aResul;
    }

    public function insertarAsistenciaUsuario()
    {
        $this->oUsuario->setNControl($_POST['NControl']);
        $this->oUsuario->setFechaAsistencia($_POST['dFecha']);
        $aResultado = $this->oUsuario->insertarAsistencia();
        return $aResultado;
    }

    public function verFechaAsistencia()
    {
        $this->oUsuario->setNControl($_POST['NControl']);
        $aResultado = $this->oUsuario->verFechaAsistencia();
        while ($row = $aResultado->fetch_assoc()) {
            $aResul[] = $row;
        }
        return $aResul;
    }

    public function insertarEvidencia(){
        $this->oUsuario->setNControl($_POST['NControl']);
        $sfoto = $_POST['foto'];
        $shora = $_POST['hora'];

            $check = @getimagesize($_FILES[$sfoto]['tmp_name']);
            if($check !== false){
                $carpeta_destino = './Evidencias';
                $archivo_subida = $carpeta_destino . $_FILES[$sfoto]['name'];
                move_uploaded_file($_FILES[$sfoto]['tmp_name'],$archivo_subida);
            }else{
                return "El archivo no es una imagen o el archivo es muy pesado";
            }
        $aResultado = $this->oUsuario->subirEvidencia($sfoto,$shora);
        return $aResultado;
    }
}
