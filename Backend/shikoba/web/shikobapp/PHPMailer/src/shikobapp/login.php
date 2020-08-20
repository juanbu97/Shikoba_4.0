<?php 
	ob_start();
	
	session_start();
	header('Access-Control-Allow-Origin: *');
	header('Content-type: application/json');

	include('clases/SistemaUsuarios.php');



	$conexion = SistemaUsuarios::login($_POST['user'], $_POST['pass']);
	if(!empty($conexion)){
		$alumno = SistemaUsuarios::getAlumno($conexion[0]['id']);
		echo json_encode($alumno[0]);
	}else{
		echo json_encode($conexion);
	}
	
	

?>
<?php 
	ob_end_flush();
?>