<!--GRAFICA-->

<?php 
/* obtiene la ruta del proyecto*/
 $rutaBase = base_url();
?>

<div class="container" >
	<div class="row"  >
		<div class="text-center" Style="margin: 2%;  padding:1%; border:3px solid pink; border-radius:20px;">
			<h1>Gr&aacute;ficas</h1> 
		</div>
		
		<div></div>
		
		<div class="row" style="border:10px inset pink; border-radius:20px;">
			<div  class= "col-md-8" style="padding:60px; " > 
				<img src="<?php echo $rutaBase.'im2.jpg'; ?>" width="60%" height="50%">
			</div> 
		
			<div  class= "col-md-4" Style="padding:60px 5px 173px 0px" > 
				<p class="text-left" >
					Los siguientes datos representan el uso de: 
				</p>
	
				<ul>
					<li>Ingreso al sistema</li>
					<li>Uso de Contenedores</li>
					<li>Uso de internet</li>
					<li>Consulta de p&iacute;ginas</li>
					<li>Diversidad de ID's</li>
					<li>De la mente</li>
				</ul>

			</div>
		
		</div>
	</div>
</div>
