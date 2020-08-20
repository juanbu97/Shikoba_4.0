<?php
	
	require_once('ConexionDB.php');


	class Noticias{

	public function getNoticiasCurso($curso, $puntos){
			$conexion = ConexionDB::getInstancia();
			
			$resultado = $conexion -> query("SELECT * FROM noticias WHERE idCurso=:curso AND puntos<=:puntos",
				array(":curso" => test_input($curso),
					  ":puntos" => test_input($puntos)));
			
			$noticias = $resultado -> fetchAll(PDO::FETCH_ASSOC);
		return $noticias;
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