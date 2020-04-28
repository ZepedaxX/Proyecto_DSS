<link href ="css/calendario.css" rel="stylesheet">
<div class="container">
	<header class="header">
	</header>

	<?php
	include("include/cabecera.php");
	?>

	<div class="container">
		<div class="panel panel-primary">
			<p><b style="font-size: 30px;">Agenda</b>  Panel Para la Gestión de Eventos</p>	
			<div class="panel-heading">
				<h4>Nuevo Evento</h4>
			</div>
			<div class="panel-body">
				
				
				
				<form  method="POST" action="Crearevento.php" class="form-horizontal" role="form" id="datos">
					<?php 
		//include ("calendario.php");
					//Implementación de la clase classAutoLoader
					if(!function_exists('classAutoLoader')){
					 function classAutoLoader($classname){
					 $classname = strtolower($classname);
					 $classFile = "class/" . $classname . '.class.php';
					 if(is_file($classFile) && !class_exists($classname)) include $classFile;
					 }
					}
					
					spl_autoload_register('classAutoLoader');
					$cal = new calendario(date("m"),date("Y"));
					$cal -> mostrar();
		?>
					
					<div class="row">
						<div class='col-md-6'>
							<h3>Datos Generales</h3>
							<label>Título del evento</label>
							<input type="text" class="form-control" name="Titulo" placeholder="Titulo de Evento">
							<br>
							<label>Lugar del evento</label>
							<input type="text" class="form-control" name="Lugar" placeholder="Lugar de Evento ">
							<br>
							<label>Descripcion</label>
							<textarea class="form-control"  name="Descripcion"  cols="5" rows="2"></textarea>

						</div>


						
						<div class='col-md-6'>
							<h3>Detalle del Evento</h3>
							<label>Categoria</label>
							<select class='form-control' name="categoria">
								<option value="">Selecciona una categoría</option>
							</select>
							<br>
							<label>Dia y hora de inicio/Finalizacion</label>
							<input type="text" name="Fecha" class='form-control'>
							<div style="position: relative; top: 20px;">
								<label>Seleccione una Imagen</label>
								<input type="file" >
							</div>
							<div style="position: relative; top: 40px; left: 180px;">
								<button class="btn btn-primary">Guardar Evento</button>
							</div>
						</div>							
					</div>
				</form>		
			</div>
		</div>
		
	</div>
	
</div>
