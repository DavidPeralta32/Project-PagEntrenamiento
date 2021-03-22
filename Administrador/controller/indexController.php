<?php session_start();



include_once '../models/indexModel.php';


if($_SERVER['REQUEST_METHOD']=="POST"){
    $oCIndexController = new indexController();

    $sFuncion = $_POST['function'];

    switch ($sFuncion) {
        case 'listarUsuarios':
            echo json_encode($oCIndexController->listarUsuarios());
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

    public function listarUsuarios(){
       $aResultado = $this->oIndex->listarUsuarios();
       while ($rows = $aResultado->fetch_assoc()) {
           $aResul[] = $rows;
       }
       return $aResul;
    }

    public function verUsuario($nIdUsuario){
        $aResultado = $this->oIndex->verUsuario($nIdUsuario);
        return $aResultado;
    }
    
}


?>