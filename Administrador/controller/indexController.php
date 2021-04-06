<?php session_start();



include_once '../models/indexModel.php';


if($_SERVER['REQUEST_METHOD']=="POST"){
    $oCIndexController = new indexController();

    $sFuncion = $_POST['function'];

    switch ($sFuncion) {
        case 'listarUsuarios':
            echo json_encode($oCIndexController->listarUsuarios());
            break;
        case 'verUsuario':
            echo json_encode($oCIndexController->verUsuario());
            break;
        
        default:
            # code...
            break;
    }
}


class indexController{
    private $oIndex;

    public function __construct(){
        $this->oIndex = new indexModel();
    }

    //listar todos los usuarios
    public function listarUsuarios(){
       $aResultado = $this->oIndex->listarUsuarios();
       while ($rows = $aResultado->fetch_assoc()) {
           $aResul[] = $rows;
       }
       return $aResul;
    }

    // ver un usuario seleccionado
    public function verUsuario(){
        $nIdUsuario = $_POST['usuario'];
        $aResultado = $this->oIndex->verUsuario($nIdUsuario);
        while ($rows = $aResultado->fetch_assoc()) {
            $aResul[] = $rows;
        }
        return $aResul;
    }
    
}


?>