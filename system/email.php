<?php 

	$nombre = htmlspecialchars($_POST['nombre']);
	$email = htmlspecialchars($_POST['email']);
	$mensaje = htmlspecialchars($_POST['mensaje']);
	$tel = htmlspecialchars($_POST['telefono']);

	$to = "dinox.corporation@gmail.com";
	$subject = "Contacto echo desde la pagina web";
	$mensaje .= "Datos del Cliente Nombre: ".$nombre." Telefono: ".$tel." Email: ".$email;
	str_replace("\n.", "\n..", $mensaje);

	$headers = "MIME-Version: 1.0\r\n"; 
	$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
	$headers .= "From: Geeky Theory < dinox.corporation@gmail.com >\r\n";

	$res = mail($to, $subject, $mensaje,$headers);
	if ($res) {
		print("Gracias por contactarnos");
	} else {
		print("No se envio el mensaje");
	}

?>