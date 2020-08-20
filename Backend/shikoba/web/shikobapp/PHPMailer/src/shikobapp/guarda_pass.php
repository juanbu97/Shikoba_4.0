<?php

	include('clases/SistemaUsuarios.php');

	$user_id = $_POST['userid'];
	
	$password = $_POST['pass'];
	
    $pass_hash = md5($password);
    SistemaUsuarios::renovarContrasenia($pass_hash, $user_id);

    echo 'Las contraseñas no coinciden';
	
?>