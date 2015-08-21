<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>

<html>
	<head>
		<link href='http://fonts.googleapis.com/css?family=Muli:400,300italic,300,400italic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Hind:400,600,700,500,300' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="<?php echo base_url('css/estilos.css'); ?>" />
		<link rel="stylesheet" href="<?php echo base_url('css/normalize.css'); ?>"/>
	</head>
	<body> 
		<div class="main_container">
			<div id="titulo_barra">
				<div id="titulo">Abogados Beltran</div>
			</div>
			<div class="contain">
				<div class="login_contain">
					<div class="login">
						<div class="login_titulo">
							Acceso a clientes 
						</div>
						<div class="login_formulario">
							<div class="formulario_text">Usuario:</div>
							<input type="text" name="usuario" />
							<div class="formulario_text">Contraseña:</div>
							<input type="password" name="usuario" />
							<br>
							<input type="submit" id="btn_accesar" value="Accesar">
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>