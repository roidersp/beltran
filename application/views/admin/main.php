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

			var json=<?php echo ($tabla);?>;
			console.log(json[0]);
			var aDataSet = json.aaData;
			console.log(aDataSet);
			
			$(document).ready(function() {
			
				
				var table = $('#table').dataTable( {
					aaData: aDataSet,
					iDisplayLength: 50,
					bScrollInfinite: true,
			        bScrollCollapse: true,
			        "stripeClasses": [  ],
			        rowId: 'staffId',
			        responsive: true,
					aoColumns: [
						{ "sTitle": "No." },
			            { "sTitle": "Nombre" },
			            { "sTitle": "Apellido P." },
			            { "sTitle": "Apellido M." },
			            { "sTitle": "correo" },
			            { "sTitle": "tipo" }
					],
					buttons: [
				        'selectColumns'
					]
				} );	
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
							Administrador / Home
						</div>
						<a href="<?php echo base_url('admin/nuevo'); ?>" >
							<div class="header_zona_btnCliente">
								Nuevo usuario
							</div>
						</a>
					</div>
					<div class="tabla_cont">
						<div class="tabla_titulo">Usuarios</div>
						<div class="tabla_cont">
							<div class="form_t"></div>
							<div  id="table_container" style="width:1200px;max-width=100%;margin:auto;">
								<table cellpadding="0" cellspacing="0" border="0" class="display" id="table" width="100%">
								</table>
							</div>
						</div>
					</div>			
				</div>
			</div>

			
		</div>
	</body>
</html>