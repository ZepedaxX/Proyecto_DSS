
<div class="container">
		<header class="header">
		</header>

		<?php
		include("include/cabecera.php");
		?>

		
		<div class="well well-small">
			<h4>Usuarios Registrados</h4>
			<hr>
			<div class="row-fluid">		
				<?php

				require("connect_db.php");
				$sql=("SELECT * FROM usuario");
				$query=mysqli_query($mysqli,$sql);
				echo "<table border='1'; class='table table-hover';>";
				echo "<tr class='warning'>";
				echo "<td>Id</td>";
				echo "<td>Usuarios</td>";
				echo "<td>Correo</td>";
				echo "<td>Editar</td>";
				echo "<td>Borrar</td>";
				echo "</tr>";
				?>

				<?php 
				while($arreglo=mysqli_fetch_array($query)){
					echo "<tr class='success'>";
					echo "<td>$arreglo[0]</td>";
					echo "<td>$arreglo[1]</td>";
					echo "<td>$arreglo[4]</td>";

					echo "<td><a href='actualizar.php?idUsuario=$arreglo[0]'><img src='images/actualizar.gif' class='img-rounded'></td>";
					echo "<td><a href='Usuarios.php?idUsuario=$arreglo[0]&idborrar=2'><img src='images/eliminar.png' class='img-rounded'/></a></td>";



					echo "</tr>";
				}

				echo "</table>";

				extract($_GET);
				if(@$idborrar==2){

					$sqlborrar="DELETE FROM Usuario WHERE idUsuario=$idUsuario";
					$resborrar=mysqli_query($mysqli,$sqlborrar);
					echo '<script>alert("REGISTRO ELIMINADO")</script> ';
						//header('Location: proyectos.php');
					echo "<script>location.href='Usuarios.php'</script>";
				}

				?>
				
				<div class="span8">
				</div>	
			</div>	
			<br/>

		</div>

	</div>