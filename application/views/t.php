<!--tabla-->
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

  <h1>Esta es la pagina para tabla</h1>
  <div class="container">  
  <table class="table table-hover">
  <thead>
  <tr>
  <th>Nombre</th>
  <th>apellido</th>
  <th>Email</th>
  </tr>
  </thead>
   
  <tbody>
  <tr>
  <td>Geraldine</td>
  <td>Ponce</td>
  <td>geral@gmail.com</td>
  </tr>
   
  <tr>
  <td>Elizabeth</td>
  <td>De Calderon</td>
  <td>edy@gmail.com</td>
  </tr>
   
  <tr>
  <td>Margarita</td>
  <td>De Francisco</td>
  <td>magge@gmail.com</td>
  </tr>
  </tbody>
  </table>
  </div>
  </body>
</html>
