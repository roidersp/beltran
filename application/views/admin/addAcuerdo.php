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
		<script type="text/javascript" src="/beltran/js/jquery.min.js"></script>
		<script type="text/javascript" src="/beltran/js/jquery.ajaxfileupload.js"></script>
		
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
								<form action="addacuerdo" id="acuerdoajax" method="post" enctype="multipart/form-data">
									<input type="hidden" name="Usuarios_idUsuarios" value="<?php echo($id); ?>"/>
									<div class="form_text">Fecha de Auto</div>
									<input type="date" name="fecha_auto" />
									<div class="form_text">Fecha de publicación</div>
									<input type="date" name="fecha_publicacion" />
									<div class="form_text">Resumen</div>
									<textarea name="resumen" rows="4" cols="20"></textarea>
									<div class="form_text">Tipo</div>
									<input type="text" name="tipo" />
									
									
									<input type="submit" value="Guardar"/>
								</form>
								
								
								<form action="http://localhost/beltran/index.php/admin/uploadimages" accept-charset="utf-8" id="addimage">

									<input type="file" id="inputimages" name="images"  />
									<input type="hidden" value="test">
									<input type="submit" value="test" />
								</form>	
								
								
								<div id="images_conrainer">
									
								</div>
																		
								
													
							</div>
						</div>
					</div>			
				</div>
			</div>

			
		</div>
		<script type="text/javascript">
			
			
			/*var options = {
                beforeSend: function(){
                    // Replace this with your loading gif image
                    $("#images_conrainer").html('subiendo');
                },
                complete: function(response){
                    // Output AJAX response to the div container
                    console.log(response);
                    $("#images_conrainer").html(response.responseText);
                    
                    //$('html, body').animate({scrollTop: $(".upload-image-messages").offset().top-100}, 150);
                    
                }
            };  
            // Submit the form
            $("#addimage").ajaxForm(options);  

			
			/*$("#addimage").on("submit",function(event){
				console.log("submit");

				
			});*/
			
			$(document).on("change","#inputimages",function(event){
				
				//$("#addimage").submit();
				
				//var postData = $("#addimage").serializeArray();
				//var formURL = "<?php echo base_url('admin/uploadimages'); ?>"
				
				/*$.ajax({
			        url : formURL,
			        type: "POST",
			        data : postData,
			        success:function(data, textStatus, jqXHR) 
			        {
			            console.log(data);
			            console.log(textStatus);
			        },
			        error: function(jqXHR, textStatus, errorThrown) 
			        {
			            //if fails    
			            console.log(jqXHR);
			            console.log(textStatus);  
			        }
    			});	*/
    			
    			
    			
    			

				
				
			});
			
			$('#inputimages').submit(function(e) {
				e.preventDefault();
				$.ajaxFileUpload({
					url 			:'<?php echo base_url('admin/uploadimages'); ?>', 
					secureuri		:false,
					fileElementId	:'userfile',
					dataType		: 'json',
					data			: {
						'title'				: $('#title').val()
					},
					success	: function (data, status)
					{
						if(data.status != 'error')
						{
							$('#images_conrainer').html('<p>Reloading files...</p>');
							refresh_files();
							$('#images_conrainer').val('');
						}
						console.log(data.msg);
					}
				});
				return false;
			});
			
			
			function uoploadfile(target){
				
			}
		</script>
	</body>
</html>