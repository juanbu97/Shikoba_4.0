<?php 
	ob_start();
	
	session_start();
	header('Access-Control-Allow-Origin: *');
	header('Content-type: application/json');
	require_once('clases/Noticias.php');


	$conexion = Noticias::getNoticiasCurso($_POST['curso'], $_POST['puntos']);

	echo json_encode($conexion);
	
	
	

?>
<?php 
	ob_end_flush();
?>