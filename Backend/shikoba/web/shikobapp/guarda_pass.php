<?php
	
	include('clases/Sistemausuarios.php');
	
	$user_id = $_POST['userid'];
	
	$password = $_POST['pass'];
	
	echo json_encode($user_id);
	return;
    $pass_hash = md5($password);
    SistemaUsuarios::renovarContrasenia($pass_hash, $user_id);

    echo 'Las contraseñas no coinciden';
	
?>