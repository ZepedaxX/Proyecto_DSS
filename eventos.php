<?php
session_start();
if (@!$_SESSION['UserName']) {
	header("Location:index.php");
}elseif ($_SESSION['idRol']==1) {
	header("Location:admin.php");
}
?>
<?php 
include("include/Eventostructure.php");
 ?>