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
							Administrador / Acuerdo
						</div>
						
					</div>
					
					<div class="content_zona">
						
									
						<div class="tabla_cont">
							<div class="form_cont">
								<form action="<?php echo base_url('admin/updateusuario'); ?>" method="post">
									<input type="hidden" name="id" value="<?php echo $expediente["idExpediente"]; ?>"/>
									<div class="form_text">No. Expediente</div>
									<input type="text" name="no_expedientes" value="<?php echo $expediente['no_expediente']; ?>" />
									<div class="form_text">Fecha de presentación</div>
									<input type="date" name="fecha_presentacion" value="<?php echo $expediente['fecha_presentacion']; ?>" />
									<div class="form_text">Fecha de ingreso</div>
									<input type="date" name="fecha_ingreso" value="<?php echo $expediente['fecha_ingreso']; ?>"/>
									<div class="form_text">Secretaria</div>
									<input type="text" name="secretaria" value="<?php echo $expediente['secretaria']; ?>"/>
									<div class="form_text">Actor</div>
									<input type="text" name="actor" value="<?php echo $expediente['actor']; ?>"/>
									<div class="form_text">Demandado</div>
									<input type="text" name="demandado" value="<?php echo $expediente['demandado']; ?>"/>
									<div class="form_text">Juicio</div>
									<input type="text" name="juicio" value="<?php echo $expediente['juicio']; ?>"/>
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