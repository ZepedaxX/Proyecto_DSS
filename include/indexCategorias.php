<div class="container">
	<header class="header">
	</header>

	<?php
	include("include/cabecera.php");
	?>

	
	<div class="well well-small">
		<h4>Categorias</h4>
		<hr>
		<div class="row-fluid">		
			<?php

			//require("connect_db.php");
			if(!function_exists('classAutoLoader')){
           function classAutoLoader($classname){
           $classname = strtolower($classname);
           $classFile = "class/" . $classname . '.class.php';
           if(is_file($classFile) && !class_exists($classname)) include $classFile;
           }
          }
          
		          spl_autoload_register('classAutoLoader');
		   $db = Database::getInstance();
		   $mysqli = $db->getConnection();
			$sql=("SELECT * FROM categoria");
			$query=mysqli_query($mysqli,$sql);
			echo "<table border='1'; class='table table-hover';>";
			echo "<tr class='warning'>";
			echo "<td>Id</td>";
			echo "<td>Categoria</td>";
			echo "<td>Editar</td>";
			echo "<td>Borrar</td>";
			echo "</tr>";
			?>

			<?php 
			while($arreglo=mysqli_fetch_array($query)){
				echo "<tr class='success'>";
				echo "<td>$arreglo[0]</td>";
				echo "<td>$arreglo[1]</td>";

				echo "<td><a href='actualizarCate.php?idCategoria=$arreglo[0]'><img src='images/actualizar.gif' class='img-rounded'></td>";
				echo "<td><a href='Categorias.php?idCategoria=$arreglo[0]&idborrar=2'><img src='images/eliminar.png' class='img-rounded'/></a></td>";



				echo "</tr>";
			}

			echo "</table>";

			extract($_GET);
			if(@$idborrar==2){

				$sqlborrar="DELETE FROM categoria WHERE idCategoria=$idCategoria";
				$resborrar=mysqli_query($mysqli,$sqlborrar);
				echo '<script>alert("REGISTRO ELIMINADO")</script> ';
						//header('Location: proyectos.php');
				echo "<script>location.href='Categorias.php'</script>";
			}
			$mysqli->close();
			?>
			
			<div class="span8">
			</div>	
		</div>	
		<br/>

	</div>

</div>