<?php 
/* obtiene la ruta del proyecto*/
 $rutaBase = base_url();
?>

<div class="row">
  <div class="col-md-3 col-md-offset-2">
    <h2>Usuario</h2>
    <!--hay que cambiar la ruta de abajo el http-->
    <a href="http://localhost/Layout/index.php/vistas/u">                  
    <img src="<?php echo $rutaBase.'resources/imagenes/cinqueterre.jpg';?>" class="img-responsive" alt="Cinque Terre" width="204" height="136">
  </div>
</div>

<div class="row">
  <div class="col-xs-3 col-md-offset-2">
    <h2>Graficas</h2>   
    <!--hay que cambiar la ruta de abajo el http-->
    <a href="http://localhost/Layout/index.php/vistas/g"> 
    <img src="<?php echo $rutaBase.'/resources/imagenes/grafica.jpg';?>" class="img-responsive" alt="Cinque Terre" width="304" height="236"> 
  </div>
</div>

