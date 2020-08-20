<?php
	
	include('ConexionDB.php');


	class SistemaUsuarios{
	

 	public function login($nombre, $pass){
		
			$conexion = ConexionDB::getInstancia();
			
			$resultado = $conexion -> query("SELECT * FROM usuarios WHERE usuario=:nombre AND password=:pass",
				array(":nombre" => test_input($nombre),
					  ":pass" => md5($pass)));
			
			$usuario = $resultado -> fetchAll(PDO::FETCH_ASSOC);

			if(count($usuario)!=0){
			
				return $usuario;
			}else{
				
				return false;
			}
		


	}

	public function getAlumno($id){
			$conexion = ConexionDB::getInstancia();
			
			$resultado = $conexion -> query("SELECT * FROM alumno WHERE idUsuario=:id",
				array(":id" => test_input($id)));
			
			$usuario = $resultado -> fetchAll(PDO::FETCH_ASSOC);

			if(count($usuario)!=0){
				
				return $usuario;
			}else{
				
				return false;
			}
	}
	public function getUserIdCorreo($correo){
		$conexion = ConexionDB::getInstancia();
		
		$resultado = $conexion -> query("SELECT * FROM alumno WHERE email=:correo",
			array(":correo" => test_input($correo)));
		
		$usuario = $resultado -> fetchAll(PDO::FETCH_ASSOC);

		if(count($usuario)!=0){
			
			return $usuario[0]['idUsuario'];
		}else{
			
			return false;
		}
	}
	
	public function getHash($userid){
		$conexion = ConexionDB::getInstancia();
		
		$resultado = $conexion -> query("SELECT hash FROM usuarios WHERE idUsuario=:userid",
			array(":userid" => test_input($userid)));
		
		$usuario = $resultado -> fetchAll(PDO::FETCH_ASSOC);

		if(count($usuario)!=0){
			
			return $usuario[0]['hash'];
		}else{
			
			return false;
		}
	}

	public function renovarContrasenia($pass, $userid){
		$conexion = ConexionDB::getInstancia();
		
		$resultado = $conexion -> query("UPDATE usuarios SET password=:pass WHERE idUsuario=:userid",
			array(":userid" => test_input($userid), 
					":pass" => test_input($pass)));
		
		$usuario = $resultado -> fetchAll(PDO::FETCH_ASSOC);

	}

	

    
}

/* Limpia los datos */
   	function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>