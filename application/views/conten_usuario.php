<?php 
/* obtiene la ruta del proyecto*/
 $rutaBase = base_url();
?>

<div class="row">
  <div class="col-md-6">
  <center><h2>Usuario</h2></center>
  <!--hay que cambiar la ruta de abajo el http-->
  <a href="<?php echo $rutaBase.'index.php/vistas/page/u';?>">  
  <center><img src="<?php echo $rutaBase.'resources/imagenes/cinqueterre.jpg';?>" class="img-responsive" alt="Cinque Terre" width="204" height="136"></center>
  </div>

  <div class="col-md-6">
  <center><h2>Graficas</h2></center>
  <!--hay que cambiar la ruta de abajo el http-->
  <a href="<?php echo $rutaBase.'index.php/vistas/page/g';?>">
  <center><img src="<?php echo $rutaBase.'/resources/imagenes/grafica.jpg';?>" class="img-responsive" alt="Cinque Terre" width="304" height="236"></center> 
  </div>
</div>
