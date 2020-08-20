<?php

if (isset($_SERVER['HTTP_ORIGIN'])) {
    header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
    header('Access-Control-Allow-Credentials: true');
    header('Access-Control-Max-Age: 86400'); 
}

if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {

    if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
        header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");

    if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
        header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");
}
require_once('clases/SistemaUsuarios.php');
require_once("PHPMailer/class.phpmailer.php");
require_once("PHPMailer/class.smtp.php");



$correo = $_POST['correo'];
echo "hola mundo otro:";
echo $correo;

$user_id = SistemaUsuarios::getUserIdCorreo($correo);
echo $user_id;



if($user_id == false){
    echo json_encode(false);
    return;
}

$token = SistemaUsuarios::getHash($user_id);


$url = 'http://shikoba.iesgrancapitan.org/shikobapp/cambiar_pass.php?user_id='.$user_id.'&token='.$token;

$asunto = 'Recuperar Password - Sistema de Usuarios Shikoba App';
$cuerpo = "Hola, <br /><br />Se ha solicitado un reinicio de contrase&ntilde;a de la Aplicación Shikoba. <br/><br/>Para restaurar la contrase&ntilde;a, visita la siguiente direcci&oacute;n: <a href='$url'>$url</a>";


$mail = new PHPMailer(true);

$mail->CharSet = 'UTF-8';
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
$mail->Host = "smtp.gmail.com";
$mail->Port = 465; // or 587
$mail->Username = "proyectoiesgrancapitan@gmail.com"; // GMAIL username
$mail->Password = "Proyectos2017"; // GMAIL password
$mail->Subject = "Recuperar Password Examen";
$mail->AddAddress($correo);
$mail->IsHTML(true);

$mail->Body = "<html>
<head>
    <title>Restablece tu contraseña</title>
</head>
<body>
    <p>Hemos recibido una petición para restablecer la contraseña de tu cuenta.</p>
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