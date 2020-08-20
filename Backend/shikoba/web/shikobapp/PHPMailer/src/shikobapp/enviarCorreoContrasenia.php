<?php

header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');
include('clases/SistemaUsuarios.php');
include("PHPMailer/class.phpmailer.php");
include("PHPMailer/class.smtp.php");



$correo = $_POST['correo'];

$user_id = SistemaUsuarios::getUserIdCorreo($correo);
$token = SistemaUsuarios::getHash($user_id);

$url = 'http://shikoba.iesgrancapitan.org/shikobapp/cambiar_pass.php?user_id='.$user_id.'&token='.$token;

$asunto = 'Recuperar Password - Sistema de Usuarios Shikoba App';



$mail = new PHPMailer(true);

$mail->CharSet = 'UTF-8';
$mail->IsSMTP(); 
$mail->SMTPDebug = 1; 
$mail->SMTPAuth = true; 
$mail->SMTPSecure = 'ssl'; 
$mail->Host = "smtp.gmail.com";
$mail->Port = 465; 
$mail->Username = "proyectoiesgrancapitan@gmail.com"; 
$mail->Password = "Proyectos2017"; 
$mail->Subject = $asunto;
$mail->AddAddress($correo);
$mail->IsHTML(true);

$mail->Body = "<html>
<head>
    <title>Restablece tu contraseña</title>
</head>
<body>
    <p>Hemos recibido una petición para restablecer la contraseña de tu cuenta de la aplicación Shikoba para móvil.</p>
    <p>Si hiciste esta petición, haz clic en el siguiente enlace, si no hiciste esta petición puedes ignorar este correo.</p>
    <p>
    
    <a href='".$url."'> Restablecer contraseña </a>
    </p>
</body>
</html>";


//Typical mail data
$mail->Send();

echo json_encode(true);


?>