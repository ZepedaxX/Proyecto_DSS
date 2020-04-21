<?php


extract($_POST);	//extraer todos los valores del metodo post del formulario de actualizar
	require("connect_db.php");
	$sentencia="update Usuario set UserName='$user',  Correo='$email' where idUsuario='$idUsuario'";
	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	$resent=mysqli_query($mysqli,$sentencia);
	if ($resent==null) {
		echo "Error de procesamieno no se han actuaizado los datos";
		echo '<script>alert("ERROR EN PROCESAMIENTO NO SE ACTUALIZARON LOS DATOS")</script> ';
		header("location: Usuarios.php");
		
		echo "<script>location.href='Usuarios.php'</script>";
	}else {
		echo '<script>alert("REGISTRO ACTUALIZADO")</script> ';
		
		echo "<script>location.href='Usuarios.php'</script>";

		
	}
?>