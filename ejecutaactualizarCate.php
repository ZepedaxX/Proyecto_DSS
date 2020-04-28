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

	//$sentencia="update Categoria set NombreC='$NombreC' where idCategoria='$NombreC'";
	$sentencia="update Categoria set NombreC=? where idCategoria=?";
	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	//comentario viejo mysql es ahora de la clase database en un singleton
	//$resent=mysqli_query($mysqli,$sentencia);
    $stmt = $mysqli->prepare($sentencia);
	$stmt->bind_param("si", $NombreC, $idCategoria);
	$stmt->execute();
	$stmt->close();
 	$mysqli->close();


	/*if ($resent==null) {
		echo "Error de procesamieno no se han actuaizado los datos";
		echo '<script>alert("ERROR EN PROCESAMIENTO NO SE ACTUALIZARON LOS DATOS")</script> ';
		header("location: Usuarios.php");
		
		echo "<script>location.href='Categorias.php'</script>";
	}else {*/
		echo '<script>alert("REGISTRO ACTUALIZADO")</script> ';
		
		echo "<script>location.href='Categorias.php'</script>";

		/*
	}*/
?>