<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>

<html>
	<head>
		<link href='http://fonts.googleapis.com/css?family=Muli:400,300italic,300,400italic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Hind:400,600,700,500,300' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.8/css/jquery.dataTables.css">
		<link rel="stylesheet" href="<?php echo base_url('css/normalize.css'); ?>"/>
		<link rel="stylesheet" href="<?php echo base_url('css/admin.css'); ?>" />
		<link rel="stylesheet" href="<?php echo base_url('css/estilos.css'); ?>" />
		<script type="text/javascript" src="<?php echo base_url('js/jquery.min.js'); ?>"></script>
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
							Administrador / Clientes
						</div>
						<form action="<?php echo base_url('admin/expediente'); ?>" method="post">
							<input type="hidden" name="id" value="<?php echo $cliente["idUsuarios"]; ?>"/>
							<input class="header_zona_btnCliente" type="submit" value="Nuevo expediente"/>
						</form>
					</div>
					
					<div class="content_zona">
						
						<div class="tabla_cont">
							<div class="form_cont">
								<form action="add" method="post">
									<div class="form_text">Nombre</div>
									<input type="text" name="nombre" value="<?php echo $cliente['nombre']; ?>" />
									<div class="form_text">Apellido paterno</div>
									<input type="text" name="apellidoP" value="<?php echo $cliente['apellidoP']; ?>" />
									<div class="form_text">Apellido materno</div>
									<input type="text" name="apellidoM" value="<?php echo $cliente['apellidoM']; ?>"/>
									<div class="form_text">Correo electrónico</div>
									<input type="email" name="correo" value="<?php echo $cliente['correo']; ?>"/>
									<div class="form_text">tipo</div>
									<select name="tipo">
										<option <?php echo ($cliente['tipo']=='cliente'?'selected="selected"':'' ) ?>  value="cliente" >Cliente</option>
										<option <?php echo($cliente['tipo']=='administrador'?'selected="selected"':'' ) ?> value="administrador">Administrador</option>
										<option  <?php echo($cliente['tipo']=='colaborador'?'selected="selected"':'' )?>  value="colaborador">Colaborador</option>
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