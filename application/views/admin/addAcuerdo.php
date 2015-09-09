<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>

<html>
	<head>
		<link href='http://fonts.googleapis.com/css?family=Muli:400,300italic,300,400italic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Hind:400,600,700,500,300' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="/beltran/css/normalize.css"/>
		<link rel="stylesheet" href="/beltran/css/estilos.css" />
		<link rel="stylesheet" href="/beltran/css/admin.css" />
		<script type="text/javascript" src="/beltran/js/jquery.min.js"></script>
		<script type = "text/javascript" src = "//cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.js"></script>

		
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
							<div class="form_cont k">
								<div class="form_side izqu">
									<form action="addacuerdo" id="acuerdoajax" method="post" enctype="multipart/form-data">
										<input type="hidden" name="Expediente_idExpediente" value="<?php echo($id); ?>"/>
										<div class="form_text">Fecha de Auto</div>
										<input type="date" name="fecha_auto" />
										<div class="form_text">Fecha de publicación</div>
										<input type="date" name="fecha_publicacion" />
										<div class="form_text">Resumen</div>
										<textarea name="resumen" rows="4" cols="20"></textarea>
										<div class="form_text">Tipo</div>
										<input type="text" name="tipo" />
										
										
										
									</form>
								</div>
								<div class="form_side dere">
									<?php echo form_open_multipart('admin/uploadimages', array('id' => 'addimage'));?>															
										<div class="selectfile">
											<div class="textselect">Agregar imágenes</div>
											<input type="file" multiple = "multiple" accept = "image/*" class = "form-control" name="uploadfile[]" size="20" id="inputimages" />
										</div>
										<input type="hidden" name="id" value="<?php echo($id); ?>" />
									</form>	
								
								
									<div id="images_container">
										
									</div>
																		
								</div>
									<input id="enviar_form" type="submit" value="Guardar"/>				
							</div>
						</div>
					</div>			
				</div>
			</div>

			
		</div>
		
<script type="text/javascript">
	jQuery(document).ready(function($) {
	
		var fileInput = document.getElementById('nl');
		var fd = new FormData(this);
	
		
	    var options = {
	        beforeSend: function(){
	            // Replace this with your loading gif image
	           // $("#images_container").html('subiendo');
	        },
	        complete: function(response){
	            // Output AJAX response to the div container
	           // $("#images_conrainer").html(response.responseText);
	           var list=$.parseJSON(response.responseText)
	           
	           $.each(list, function(index, item){
	               console.log(item);
	               var input = '<input id="imagen_'+index+'" type="hidden" name="urls[]" value="'+item+'" />';
	               var image = '<div class="image_item" id="image_item_'+index+'" num="'+index+'" url="'+item+'" style="background-image: url(../'+item+');"  ><div class="image_remove">X</div></div>' ;
	               $("#acuerdoajax").append(input);
	               $("#images_container").append(image);
	           });
	            
	        }
	    };  
	
	    // Submit the form
	    $("#addimage").ajaxForm(options);  
	    
	    $("#inputimages").on("change",function(){
	        $("#addimage").submit();
	    });
	    
	    $("#enviar_form").on("click",function(){
	        $("#acuerdoajax").submit();
	    });
	    
	    $(document).on("click",".image_remove",function(){
		   var url_image = $(this).parent().attr("url");
		   $.post( "admin/deleteimage", { url: url_image })
			  .done(function( data ) {
			    alert( "Data Loaded: " + data );
			});
		   
		   
	    });
	});
</script>
		
		
	</body>
</html>