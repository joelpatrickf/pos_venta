	<?php 
//if(isset($_SESSION)){ }else{ session_start(); } 

require_once "conexion.php";

class UsuariosModelo{


    /*==============================
        VALIDAR LOGIN # 1
      ==============================*/
	static public function mdlIniciarSesion($usuario,$password)	{
		// print_r($usuario);
		// echo "<br>";
		// print_r($password);

		// $stmt = Conexion::conectar()->prepare("");
		// $stmt->bindParam(":usuario",$usuario,PDO::PARAM_STR);
		// $stmt->bindParam(":password",$password,PDO::PARAM_STR);
		// $stmt->execute();
		
        // $res = $stmt ->fetchAll(PDO::FETCH_CLASS);
		
        
        if ($usuario == 'admin') {
            $_SESSION['usuario'] = $usuario; // almacena la respuesta en una sesion
        }

        return $_SESSION['usuario'];
	}


    /*==============================
        LISTAR USUARIOS # 2 
      ==============================*/
	static public function mdlUsuariosListar(){
		
		$stmt = Conexion::conectar()->prepare("SELECT '' AS vacio,  au_inc,usuario,password1,cod_farmacia,empleado,rol,cedula,pass_deposito,id_perfil_usuario,estado,foto,usuario_creacion,fecha,fecha_edicion from usuarios where cod_farmacia<>'Com02' ");
		
		$stmt->execute();
		$res = $stmt-> fetchAll(PDO::FETCH_ASSOC);
		return $res;

	}	
}




 ?>