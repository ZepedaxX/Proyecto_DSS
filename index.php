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
            <form action="validar.php" method="POST" class="form-signin">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="text" name="mail" id="inputEmail" class="form-control" placeholder="Usuario" required autofocus>
                <input type="password" name="pass" id="inputPassword" class="form-control" placeholder="Contraseña" required>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit" value="Aceptar">Ingresar</button>
            </form><!-- /form -->
            <a href="registrar.php" class="forgot-password">
                Registrate
            </a>
        </div><!-- /card-container -->
    </div><!-- /container -->



<!--Fin formulario registro -->

		</td>
		</tr>
		</table>
		</div></center></div></center>

	
</body>
</html>