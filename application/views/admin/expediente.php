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
		<script type="text/javascript" charset="utf-8">
			/* Data set - can contain whatever information you want */

			var json=<?php //echo(json_encode( $tabla));?>;
			var aDataSet = json;
			console.log(aDataSet);
			
			$(document).ready(function() {
			
				
				/*var table = $('#table').dataTable( {
					aaData: aDataSet,
					iDisplayLength: 50,
					bScrollInfinite: true,
			        bScrollCollapse: true,
			        "stripeClasses": [  ],
			        rowId: 'staffId',
			        responsive: true,
			        columns: [
				        { data: 'idExpediente' },
				        { data: 'no_expediente' },
				        { data: 'fecha_presentacion' },
				        { data: 'fecha_ingreso' },
				        { data: 'secretaria' },
				        { data: 'actor' },
				        { data: 'demandado' },
				        { data: 'juicio' }
				    ]
					
				} );
				*/	
			} );
			
			$(document).on({
			    mouseenter: function () {
			        $('tr.selected').removeClass('selected');
		            $(this).addClass('selected');
			    },
			    mouseleave: function () {
			        $(this).removeClass('selected');
			    }
			}, "#table tr");
			
			$(document).on("click","tbody tr", function(){
				var id = $(this).find(".sorting_1").text();
				window.location = "<?php echo base_url("admin/cliente/"); ?>/"+id;
			});
 
			
				</script>
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
						<form action="<?php echo base_url('admin/nuevoacuerdo'); ?>" method="post">
							<input type="hidden" name="id" value="<?php echo $expediente["idExpediente"]; ?>"/>
							<input class="header_zona_btnCliente" type="submit" value="Nuevo acuerdo"/>
						</form>
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
							<div class="tabla_cont">
								<div class="tabla_titulo">Usuarios</div>
								<div class="tabla_cont">
									<div class="form_t"></div>
									<div  id="table_container" style="max-width:800px;width=100%;margin:auto;">
										<table cellpadding="0" cellspacing="0" border="0" class="display" id="table" width="100%">
											<thead>
									            <tr>
									                <th>No.</th>
									                <th>Tipo</th>
									                <th>F. Auto</th>
									                <th>F. Publicación</th>
									                <th>Resumen</th>
									                <th>Ver imagen</th>
									            </tr>
									        </thead>
										</table>
									</div>
								</div>
							</div>
							
						</div>						
					</div>
					
				</div>
			</div>
		</div>
	</body>
</html>