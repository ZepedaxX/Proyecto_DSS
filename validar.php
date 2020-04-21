
<?php
//include("connect_db.php");

//$miconexion = new connect_db;


session_start();
require("connect_db.php");

$username=$_POST['mail'];
$pass=$_POST['pass'];


	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
$sql2=mysqli_query($mysqli,"SELECT * FROM usuario  WHERE UserName='$username'");
if($f2=mysqli_fetch_assoc($sql2)){
	if($pass==$f2['pasadmin']){
		$_SESSION['idUsuario']=$f2['idUsuario'];
		$_SESSION['UserName']=$f2['UserName'];
		$_SESSION['idRol']=$f2['idRol'];

		echo '<script>alert("BIENVENIDO ADMINISTRADOR")</script> ';
		echo "<script>location.href='admin.php'</script>";
		
	}
}


$sql=mysqli_query($mysqli,"SELECT * FROM usuario WHERE UserName='$username'");
if($f=mysqli_fetch_assoc($sql)){
	if($pass==$f['pasword']){
		$_SESSION['idUsuario']=$f['idUsuario'];
		$_SESSION['UserName']=$f['UserName'];
		$_SESSION['idRol']=$f['idRol'];

		header("Location: index2.php");
	}else{
		echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
		
		echo "<script>location.href='index.php'</script>";
	}
}else{
	
	echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';
	
	echo "<script>location.href='index.php'</script>";	

}

?>