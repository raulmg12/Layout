<?php 
/* obtiene la ruta del proyecto*/
 $rutaBase = base_url();
?>

<div class="row">
  <div class="col-md-3 col-md-offset-2">
    <h2>Usuario</h2>
<<<<<<< HEAD
    <a href="http://localhost/Layout/index.php/application/views/u">                  
    <img src="http://localhost/Layout/resources/imagenes/cinqueterre.jpg" class="img-responsive" alt="Cinque Terre" width="  204" height="136" > 
=======
    <!--cambiar la ruta del href-->
    <a href="http://localhost/Codeigniter/index.php/vistas/u">                  
    <img src="<?php echo $rutaBase.'resources/imagenes/cinqueterre.jpg';?>" class="img-responsive" alt="Cinque Terre" width="  204" height="136" > 
>>>>>>> origin/master
  </div>

  <div class="col-md-3 col-md-offset-2">
    <h2>Configuracion</h2>
<<<<<<< HEAD
    <a href="http://localhost/Layout/index.php/application/views/c">                   
    <img src="http://localhost/Layout/resources/imagenes/engrane.jpg" class="img-responsive" alt="Engrane" width="204" height="136" > </a>
=======
        <!--cambiar la ruta del href-->
    <a href="http://localhost/Codeigniter/index.php/vistas/c">                   
    <img src="<?php echo $rutaBase.'resources/imagenes/engrane.jpg';?>" class="img-responsive" alt="Engrane" width="204" height="136" > 
>>>>>>> origin/master
  </div>
</div>

<div class="row">
  <div class="col-xs-3 col-md-offset-2">
<<<<<<< HEAD
    <h2>Graficas</h2>                  
    <a href="http://localhost/Layout/index.php/application/views/g"> 
    <img src="http://localhost/Layout/resources/imagenes/grafica.jpg" class="img-responsive" alt="Cinque Terre" width="304" height="236"></a> 
=======
    <h2>Graficas</h2>          
        <!--cambiar la ruta del href-->
    <a href="http://localhost/Codeigniter/index.php/vistas/g"> 
    <img src="<?php echo $rutaBase.'resources/imagenes/grafica.jpg';?>" class="img-responsive" alt="Grafica" width="304" height="236"> 
>>>>>>> origin/master
  </div>

  <div class="col-xs-3 col-md-offset-2">
    <h2>Tablas</h2>
<<<<<<< HEAD
    <a href="http://localhost/Layout/index.php/vistas/t">                   
    <img src="http://localhost/Layout/resources/imagenes/tabla.jpg" class="img-responsive" alt="Engrane" width="304" height="236"> 
=======
        <!--cambiar la ruta del href-->
    <a href="http://localhost/Codeigniter/index.php/vistas/t">                   
    <img src="<?php echo $rutaBase.'resources/imagenes/tabla.jpg';?>" class="img-responsive" alt="Tabla" width="304" height="236"> 
>>>>>>> origin/master
  </div>
</div>
