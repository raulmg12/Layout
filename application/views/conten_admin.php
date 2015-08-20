<?php 
/* obtiene la ruta del proyecto*/
 $rutaBase = base_url();
?>

<div class="row">
  <div class="col-md-3 col-md-offset-2">
    <h2>Usuario</h2>

    <a href="<?php echo $rutaBase.'index.php/vistas/page/u';?>">
    <img src="<?php echo $rutaBase.'resources/imagenes/cinqueterre.jpg';?>" class="img-responsive" alt="Usuario" width="204" height="136" > 
  </div>

  <div class="col-md-3 col-md-offset-2">
    <h2>Configuracion</h2>

    <a href="<?php echo $rutaBase.'index.php/vistas/page/configuracion';?>">                      
    <img src="<?php echo $rutaBase.'resources/imagenes/engrane.jpg';?>" class="img-responsive" alt="Engrane" width="204" height="136" > 
  </div>
</div>

<div class="row">
  <div class="col-xs-3 col-md-offset-2">
    <h2>Graficas</h2>     
         
    <a href="<?php echo $rutaBase.'index.php/vistas/page/g';?>">
    <img src="<?php echo $rutaBase.'resources/imagenes/grafica.jpg';?>" class="img-responsive" alt="Grafica" width="304" height="236"> 
  </div>

  <div class="col-xs-3 col-md-offset-2">
    <h2>Tablas</h2>

    <a href="<?php echo $rutaBase.'index.php/vistas/page/t';?>">                     
    <img src="<?php echo $rutaBase.'resources/imagenes/tabla.jpg';?>" class="img-responsive" alt="Tabla" width="304" height="236"> 
  </div>
</div>

