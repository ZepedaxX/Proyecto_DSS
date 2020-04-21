<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['UserName']) {
	header("Location:index.php");
}elseif ($_SESSION['idRol']==2) {
	header("Location:index2.php");
}
?>
<?php
include("include/Categoriastructure.php");
?>