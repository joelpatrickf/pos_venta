<?php 

class UsuariosControlador{

    /*==============================
        LOGIN USUARIOS # 1
      ==============================*/
	static public function ctrlUsuariosLogin($usuario,$clave){
		$respuesta = UsuariosModelo::mdlIniciarSesion($usuario,$clave);
		return $respuesta;
	}

    /*==============================
        LISTAR USUARIOS # 2
      ==============================*/
	static public function ctrlUsuariosListar(){
		$menuUsuario = UsuariosModelo::mdlUsuariosListar();
		return $menuUsuario;
	}





}

