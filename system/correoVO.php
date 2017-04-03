<?php  

	include_once("conection.php");
	/**
	* Clase modelo de la tabla correo
	*/
	class Correo {
		
		
		public static function saveEmail($email) {
			$conn = Conexion::instance();
			$sql = "INSERT INTO correos(email) VALUES(?)";
			$query = $conn->prepare($sql);
			$query->bindParam(1, $email, \PDO::PARAM_STR);
			$query->execute();
		}

	}
	
?>