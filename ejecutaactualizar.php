<?php
if(!function_exists('classAutoLoader')){
					 function classAutoLoader($classname){
					 $classname = strtolower($classname);
					 $classFile = "class/" . $classname . '.class.php';
					 if(is_file($classFile) && !class_exists($classname)) include $classFile;
					 }
					}
					
					spl_autoload_register('classAutoLoader');


extract($_POST);	//extraer todos los valores del metodo post del formulario de actualizar
	//require("connect_db.php");
	$db = Database::getInstance();
	$mysqli = $db->getConnection();

	//$sentencia="update Usuario set UserName='$user',  Correo='$email' where idUsuario='$idUsuario'";
	$sentencia="update Usuario set UserName=?,  Correo=? where idUsuario=?";
	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	$stmt = $mysqli->prepare($sentencia);
	$stmt->bind_param("ssi", $user, $email, $idUsuario);
	$stmt->execute();
	$stmt->close();
 	$mysqli->close();


	//$resent=mysqli_query($mysqli,$sentencia);
	/*if ($resent==null) {
		echo "Error de procesamieno no se han actuaizado los datos";
		echo '<script>alert("ERROR EN PROCESAMIENTO NO SE ACTUALIZARON LOS DATOS")</script> ';
		header("location: Usuarios.php");
		
		echo "<script>location.href='Usuarios.php'</script>";
	}else {*/
		echo '<script>alert("REGISTRO ACTUALIZADO")</script> ';
		
		echo "<script>location.href='Usuarios.php'</script>";

		/*
	}*/
?>