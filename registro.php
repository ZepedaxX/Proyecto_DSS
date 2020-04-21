<?php

	$UserName=$_POST['UserName'];
	$Correo=$_POST['Correo'];
	$pasword= $_POST['pasword'];
	$rpass=$_POST['pasword'];
	$idRol=$_POST['idRol'];
	$id="0";


	require("connect_db.php");
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	$checkemail=mysqli_query($mysqli,"SELECT * FROM usuario  WHERE Correo='$Correo'");
	$check_mail=mysqli_num_rows($checkemail);
		if($pasword==$rpass){
			if($check_mail>0){
				echo ' <script language="javascript">alert("Atencion, ya existe el mail designado para un usuario, verifique sus datos");</script> ';
				echo "<script>location.href='registrar.php'</script>";
			}else{
				
				//require("connect_db.php");
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
				mysqli_query($mysqli,"INSERT INTO usuario VALUES('$id','$UserName', '', '$pasword','$Correo','$idRol')");
				//echo 'Se ha registrado con exito';
				echo ' <script language="javascript">alert("Usuario registrado con éxito");</script> ';
				echo "<script>location.href='registrar.php'</script>";
			}
			
		}else{
			echo 'Las contraseñas son incorrectas';
		}

	
?>