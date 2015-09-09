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
							<form action="<?php echo base_url('login/ingresar'); ?>" method="post">
							<div class="formulario_text">Correo:</div>
							<input type="text" name="usuario" />
							<div class="formulario_text">Contraseña:</div>
							<input type="password" name="password" />
							<?=form_hidden('token',$token)?>
							<br>
							<input type="submit" id="btn_accesar" value="Accesar">
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>