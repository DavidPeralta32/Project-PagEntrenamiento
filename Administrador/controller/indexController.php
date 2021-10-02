<?php session_start();



include_once '../models/indexModel.php';


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $oCIndexController = new indexController();

    $sFuncion = $_POST['function'];

    switch ($sFuncion) {
        case 'listarUsuarios':
            echo json_encode($oCIndexController->listarUsuarios());
            break;
        case 'verUsuario':
            echo json_encode($oCIndexController->verUsuario());
            break;
        case 'editarUsuario':
            echo json_encode($oCIndexController->editarUsuario());
            break;
        case 'actualizaUsuario':
            echo json_encode($oCIndexController->actualizaUsuario());
            break;
        case 'buscarUsuario':
            echo json_encode($oCIndexController->buscarUsuarioControl());
            break;
        default:
            # code...
            break;
    }
}


class indexController
{
    private $oIndex;

    public function __construct()
    {
        $this->oIndex = new indexModel();
    }

    //listar todos los usuarios
    public function listarUsuarios()
    {
        $aResultado = $this->oIndex->listarUsuarios();
        while ($rows = $aResultado->fetch_assoc()) {
            $aResul[] = $rows;
        }
        return $aResul;
    }

    // ver un usuario seleccionado
    public function verUsuario()
    {
        $nIdUsuario = $_POST['usuario'];
        $aResultado = $this->oIndex->verUsuario($nIdUsuario);
        while ($rows = $aResultado->fetch_assoc()) {
            $aResul[] = $rows;
        }
        return $aResul;
    }

    public function editarUsuario()
    {
        $nIdUsuario = $_POST['usuario'];
        $aResultado = $this->oIndex->verUsuario($nIdUsuario);
        while ($rows = $aResultado->fetch_assoc()) {
            $aResul[] = $rows;
        }
        return $aResul;
    }

    public function actualizaUsuario()
    {
        $nIdUsuario = $_POST['usuario'];
        $sNombre = $_POST['nombre'];
        $sApellido = $_POST['apellido'];
        $sCarrera = $_POST['carrera'];
        $sAsistencia = $_POST['asistencia'];
        $sDisciplina = $_POST['disciplina'];

        $aResultado = $this->oIndex->editarUsuario($nIdUsuario, $sNombre, $sApellido, $sCarrera, $sDisciplina, $sAsistencia);

        return $aResultado;
    }

    public function buscarUsuarioControl()
    {
        $nControl = $_POST['nControl'];

        $aResultado = $this->oIndex->buscarUsuario($nControl);
        $rowResul = mysqli_num_rows($aResultado);
        if($rowResul > 0){
            while ($rows = $aResultado->fetch_assoc()) {
                $aResul[] = $rows;
            }
            return $aResul;
        }else{
            return 'Error';
        }  
    }
}
