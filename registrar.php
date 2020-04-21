<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/login.css">
  <title>Agenda Electronica | Beta 1.0</title>
</head>
<body background="images/background.jpg" style="background-attachment: fixed">
    <br>
    <br>
    <br>
    <div class="container">
        <div class="card card-container">
            <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form action="registro.php" method="POST" class="form-signin">
                <input type="text" name="idRol" style="display:none" value="3">

                <label style="opacity: 0.5">Ingrese un Nombre de Usuario</label>
                <input type="text" name="UserName" id="inputUsuario"  class="form-control" placeholder="Nombre de Usuario"  required>

                <label style="opacity: 0.5">Ingrese su Correo Electronico</label>
                <input type="email" name="Correo"     id="inputEmail"    class="form-control" placeholder="Correo Electronico" required>

                <label style="opacity: 0.5">Ingrese su Contraseña</label>
                <input type="password" name="pasword" id="inputPassword" class="form-control" placeholder="Contraseña" required>

                <label style="opacity: 0.5">Repita su Contraseña</label>
                <input type="password" name="pasword" id="inputPassword" class="form-control" placeholder="Contraseña" required>


                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit" value="Aceptar">Registrar</button>
            </form>
            <a href="index.php" class="forgot-password">
                Iniciar Sesion
            </a>
        </div>
    </div>


    <?php
    if(isset($_POST['submit'])){
     require("registro.php");
 }
 ?>
</td>
</tr>
</table>
</div></center></div></center>


</body>
</html>