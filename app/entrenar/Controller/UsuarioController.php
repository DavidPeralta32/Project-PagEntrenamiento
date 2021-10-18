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

        case 'actualizarAsistencia':
            echo json_encode($oCUsuario->actualizarAsistenciaUsuario());
            break;

        case 'checarFechaAsistecia':
            echo json_encode($oCUsuario->verFechaAsistencia());
            break;

        case 'evidenciaUsuario':
            echo json_encode($oCUsuario->evidenciaPorUsuario());
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

    public function actualizarAsistenciaUsuario()
    {
        $this->oUsuario->setNControl($_POST['NControl']);
        $this->oUsuario->setFechaAsistencia($_POST['dFecha']);
        $aResultado = $this->oUsuario->actualizarAsistencia();
        return $aResultado;
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
        $rowResul = mysqli_num_rows($aResultado);
        if ($rowResul > 0) {
            while ($row = $aResultado->fetch_assoc()) {
                $aResul[] = $row;
            }
            return $aResul;
        } else {
            return 'Error';
        }
    }

    public function evidenciaPorUsuario(){
        $this->oUsuario->setNControl($_POST['NControl']);
        $aResultado = $this->oUsuario->evidenciasPorUsuario();
        $rowResul = mysqli_num_rows($aResultado);
        if ($rowResul > 0) {
            while ($row = $aResultado->fetch_assoc()) {
                $aResul[] = $row;
            }
            return $aResul;
        } else {
            return 'Error';
        }
    }
}
