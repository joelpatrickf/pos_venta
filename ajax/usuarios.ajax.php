<?php 
if(isset($_SESSION)){ }else{ session_start(); }

require_once "../controladores/usuarios.controlador.php";
require_once "../modelos/usuarios.modelo.php";



class AjaxUsuarios{

    /*==============================
        VALIDAR LOGIN # 1
      ==============================*/
    public function ajaxUsuariosLogin($usuario,$clave)   {
        $respuesta = UsuariosControlador::ctrlUsuariosLogin($usuario,$clave);
        
        if (empty($respuesta)) {
            $res='no';
            echo json_encode($res,JSON_UNESCAPED_UNICODE);
        }else{
            echo json_encode($respuesta,JSON_UNESCAPED_UNICODE);
        }
    }

    /*==============================
        LISTAR USUARIOS # 2
      ==============================*/

    public function ajaxUsuariosListar(){
        $res = UsuariosControlador::ctrlUsuariosListar();
        echo json_encode($res,JSON_UNESCAPED_UNICODE);
    }




}



if (isset($_POST['accion']) && $_POST['accion'] == 2) { // Login

    $res = new AjaxUsuarios();
    $res-> ajaxUsuariosLogin($_POST['usuario'],$_POST['clave']);

}else if (isset($_POST['accion']) && $_POST['accion'] == 1) { // parametro para listrar Usuarios
    $res = new AjaxUsuarios();
    $res-> ajaxUsuariosListar();
}