<?php
	include ("conexion.php");

	if(isset($_POST["Enviar"])){
		$nombre = utf8_decode($_POST['¡Nombre']);
		$apellidos = utf8_decode($_POST['¡Apellido']);
		$correo = utf8_decode($_POST['¡Correo']);
		$numero = utf8_decode($_POST['¡Numero']);
		$mensaje = utf8_decode($_POST['¡Gamertag']);
		$consulta = 'INSERT INTO `ly`.`formulario1` (`Nombre`, `Apellido`, `Correo`, `Numero`, `Gamertag`) VALUES ("'. $nombre .'", "'.$apellido.'","'.$correo.'", "'.$numero.'","'.$gamertag.'")';

		$retry_value = mysqli_query($conexion, $consulta);
				if(!$retry_value){
					die('Error: '.mysqli_error($conexion));
				}else{
					header('Location: index.html');
				}
			}



		?>
