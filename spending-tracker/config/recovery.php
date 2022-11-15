<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require '../PHPMailer/Exception.php';
require '../PHPMailer/PHPMailer.php';
require '../PHPMailer/SMTP.php';

require_once('config.php');
$email= $_POST['email'];
$query= "SELECT * FROM usuarios WHERE correo = '$email' AND status =1 ";
$result = $conexion->query($query);
$row = $result->fetch_assoc();

if ($result->num_rows > 0) {
    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp-mail.outlook.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'gagnaj@outlook.com';
        $mail->Password   = 'banga/078';
        $mail->Port       = 587; 

        $mail->setFrom('gagnaj@outlook.com', 'raider');
        $mail->addAddress('taeoraider19@gmail.com', 'raider');
        $mail->isHTML(true); 
        $mail->Subject = 'recuperacion de contraseña';
        $mail->Body    = 'Hola, este es un correo generado para solicitar tu recuperación de contraseña, por favor, visite la página <a href="localhost/spending-tracker/change-password.php?id='.$row['id'].'">recuperacion de contraseña</a>';

        $mail->send();
        header("location:../login.php?message=ok");
    } catch (Exception $e) {
        header("location:../login.php?message=error");
    }

}else{
    header("location:../login.php?message=not_found");
}

?>