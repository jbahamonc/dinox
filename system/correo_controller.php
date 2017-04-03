<?php  
	
	include 'correoVO.php';

	$email = $_POST['email'];
	if (!empty($email)) {
		if (filter_var($email,FILTER_VALIDATE_EMAIL)) {
			Correo::saveEmail($email);
			print("Gracias por suscribirte");
		} else {
			print("correo no valido");
		}
		
	} else {
		print("Debe ingresar un correo");
	}

?>