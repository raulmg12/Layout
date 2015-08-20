<!--Usuario-->
<?php 
/* obtiene la ruta del proyecto*/
 $rutaBase = base_url();
?>

<!DOCTYPE html>
<html lang="es">
	
	<head>
		<title>Formulario de registro</title>	

		<!--CONEXION DE BOOTSTRAP-->
		<link href="http://localhost/Layout/resources/bootstrap/css/bootstrap-theme.min.css" type="text/css" rel="stylesheet"/>
		<link href="http://localhost/Layout/resources/bootstrap/css/bootstrap.css" type="text/css" rel="stylesheet"/>
	
		<!--CONEXION DE JQUERY-->
		<script src="http://localhost/Layout/resources/js/jquery.js" type="text/javascript"></script> 
	
		<!--<link href="http://localhost/Layout/resources/bootstrap/js/bootstrap.js" type="text/css" rel="stylesheet"/>-->
		<script src="http://localhost/Layout/resources/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	</head>

	<body>
		<div class="row">
  			<div class="col-md-6" style="padding:60px;">
	  			<center><img src="<?php echo $rutaBase.'resources/imagenes/user.png';?>" class="img-responsive" alt="Usuario"></center>
  			</div>
  		
  			<div class="col-md-6">
				<h1>Datos del usuario</h1>
				</br>
				</br>

				<h4>Nombre:</h4> 
				<p>Ricardo Rinc&oacute;n De la Torre</p>
				</br>

				<h4>Licenciatura:</h4>
				<p>Computaci&oacute;n</p>
				</br>

				<h4>Edad:</h4>
				<p>La sufuciente</p>
				</br>

				<h4>Pasatiempos:</h4>
				<p>Escribir, leer y tocar guitarra cl&aacute;sica</p>
				</br>
  			</div>
  		</div>
  	</body>
  </html>>

