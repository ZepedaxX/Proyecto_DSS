<!DOCTYPE html>
<br>
 <!-- Navbar
    ================================================== -->
<nav class="navbar  navbar-expand-lg navbar-dark bg-dark">
<a class="navbar-brand" href="admin.php">AGENDA ELECTRÓNICA </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="admin.php">Eventos<span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="Categorias.php">Categorias</a>
      <a class="nav-item nav-link" href="Usuarios.php">Usuarios</a>
    </div>
  </div>
  <ul class="nav pull-right">
		<li><a style="color: white;">Bienvenido <strong><?php echo $_SESSION['UserName'];?></strong> </a></li>
			  --<li><a href="desconectar.php" style="color: white;"> Cerrar Cesión </a></li>			 
		</ul>
</nav>
<br>
<!-- ======================================================================================================================== -->