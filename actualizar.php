<?php
session_start();
if (@!$_SESSION['UserName']) {
  header("Location:index.php");
}
?>    

<?php
include("include/Actualizarstructure.php");
?>

