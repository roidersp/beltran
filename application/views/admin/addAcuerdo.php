<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>

<html>
	<head>
		<link href='http://fonts.googleapis.com/css?family=Muli:400,300italic,300,400italic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Hind:400,600,700,500,300' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="/beltran/css/estilos.css" />
		<link rel="stylesheet" href="/beltran/css/admin.css" />
		<link rel="stylesheet" href="/beltran/css/normalize.css"/>
		<script type="text/javascript" src="/beltran/js/jquery.js"></script>
		<script src="https://cdn.datatables.net/1.10.8/js/jquery.dataTables.min.js" type="text/javascript"></script>
 
	</head>
	<body> 
		<div class="main_container">
			<div id="titulo_barra">
				<div id="titulo">Abogados Beltran</div>
			</div>
			<div class="body_container">
				<div class="content">
					<div class="header_zona">
						<div class="header_zona_titulo">
							Administrador / Agregar expediente
						</div>

					</div>
					<div class="tabla_cont">
						<div class="tabla_titulo">Expediente</div>
						<div class="tabla_cont">
							<div class="form_cont">
								<form action="nuevoexpediente" method="post">
									<input type="hidden" name="Usuarios_idUsuarios" value="<?php echo($id); ?>"/>
									<div class="form_text">Fecha de Auto</div>
									<input type="date" name="fecha_auto" />
									<div class="form_text">Fecha de publicación</div>
									<input type="date" name="fecha_publicacion" />
									<div class="form_text">Resumen</div>
									<textarea name="resumen" rows="4" cols="20"></textarea>
									<div class="form_text">Tipo</div>
									<input type="text" name="tipo" />
									<input type="image" name="images" draggable multiple />
									
									
									<input type="submit" value="Guardar"/>
								</form>						
							</div>
						</div>
					</div>			
				</div>
			</div>

			
		</div>
	</body>
</html>