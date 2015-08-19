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
							Administrador / Nuevo usuario
						</div>
						<div class="header_zona_btnCliente">
							Nuevo usuario
						</div>
					</div>
					<div class="tabla_cont">
						<div class="tabla_titulo">Usuarios</div>
						<div class="tabla_cont">
							<div class="form_cont">
								<form action="/admin/add" method="post">
									<div class="form_text">Nombre</div>
									<input type="text" name="nombre" />
									<div class="form_text">Apellido paterno</div>
									<input type="text" name="apellidoP" />
									<div class="form_text">Apellido materno</div>
									<input type="text" name="apellidoM" />
									<div class="form_text">Correo electronico</div>
									<input type="email" name="email" />
									<div class="form_text">tipo</div>
									<select name="tipo">
										<option selected="selected" value="cliente" >Cliente</option>
										<option value="administrador">Administrador</option>
										<option value="colaborador">Colaborador</option>
									</select><br>	
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