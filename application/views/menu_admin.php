<!--MENU DE ADMINISTRADOR-->

<?php 
/* obtiene la ruta del proyecto*/
 $rutaBase = base_url();
?>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
	  
      <a class="navbar-brand" href="<?php echo $rutaBase.'im2.png'; ?>"><img src="<?php echo $rutaBase.'im2.png'; ?>" height="180%" width="60%" ></a>
    </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
			<li class="dropdown">
              <a id="drop1" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                Enlace 1
                
              </a>
            </li>
			
			<li class="dropdown">
              <a id="drop2" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                Enlace 2
                <span class="caret"></span>
              </a>
              <ul class="dropdown-menu" aria-labelledby="drop4">
                <li><a href="#">Lista 2.1</a></li>
                <li><a href="#">Lista 2.2</a></li>
                <li><a href="#">Lista 2.3</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Lista 2.4</a></li>
              </ul>
            </li>
			
			<li class="dropdown">
              <a id="drop1" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                Enlace 3
                <span class="caret"></span>
              </a>
              <ul class="dropdown-menu" aria-labelledby="drop1">
                <li><a href="#">Lista 1</a></li>
                <li><a href="#">Lista 2</a></li>
                <li><a href="#">Lista 3</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Lista 4</a></li>
              </ul>
            </li>
			
			<li class="dropdown">
              <a id="drop1" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                Enlace 4
                <span class="caret"></span>
              </a>
              <ul class="dropdown-menu" aria-labelledby="drop1">
                <li><a href="#">Lista 1</a></li>
                <li><a href="#">Lista 2</a></li>
                <li><a href="#">Lista 3</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Lista 4</a></li>
              </ul>
            </li>
			
            <li id="fat-menu" class="dropdown">
              <a id="drop3" href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                Administrador
                <span class="caret"></span>
              </a>
              <ul class="dropdown-menu" aria-labelledby="drop3">
				<!--Se modifica la ruta segun el nombre del controlador-->
                <li><a href="<?php echo $rutaBase.'index.php/welcome/usuario';?>">Usuario</a></li>
              </ul>
            </li>
			
			
			
          </ul>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container-fluid -->
