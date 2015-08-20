 <html>
 
 <div class="container-fluid">
 
 <form action=" " method="post" >
 	<head> <title> <h1><big><center> Configuracion</center></big></h1> </title></head>
 		
<body>
	<div class="row">	<!-- division primera parte de datos personales-->
	<div class="col-sm-3 col-md-6" style="background-color:lavender;"> 
 
 <!--<div class="col-xs-6 col-sm-offset-1">-->
	
 	  <h2><legend>Datos Personales</legend> </h2>
 
	  Nombre: <br/>
	  <input type="text" name="nombre"  placeholder=" Escribe tu Nombre" size="50" value="" id ="texto" /><br/>
  
 	 Apellido Paterno:<br/>
	 <input type="text" name="paterno" placeholder=" Escribe tu Apellido Paterno" size="50" value=""  id="paterno"/><br/>

 	 Apellido Materno:<br/>
 	 <input type="text" name="materno"  placeholder="Escribe tu Apellido Materno" size="50" value="" id="materno" /><br/>
  
 	 Telefono: <br/>
	 <input type="text" name="telefono" placeholder=" Escribe tu Telefono"  size="50" value="" id="telefono" /><br/>

 	 Correo Electronico:<br/>
	 <input type="text" name="correo" placeholder=" Escribe tu Correo Electronico" size="50" value=""  id="correo" /> <br/>
 	
 
  </div>		<!-- cerrando division de datos personales -->
    <div class="col-sm-9 col-md-6" style="background-color:lavenderblush;">
  	<!--<div class="col-xs-6 col-sm-offset-1"> 	-->
  	 
  		<h2><legend>Carrera</legend></h2>
  		<label for="carrera">Carrera</label><br/>
 		<select id="carrera" name="carr" id="carre"><br/>
  	  	<option value="" selected="selected">- selecciona -</option><br/>
    	<option value="01">Lic.Computacion</option>
    	<option value="02">Ing.Biomedica</option>
    	<option value="03">Ing.Energia</option>
    	<option value="04">Ing.Electronica</option>
    	</select><br/>
    	
    	<label>Selecciona tu tiempo de dedicacion:</label></br>
		<label>Tiempo completo</label>
		<input type="checkbox" name="tiempo C" /></br>
		<label>Tiempo medio</label>
		<input type="checkbox" name="tiempo M" /></br>
    	
    </br>
 		<label>Genero:</label>
		<label>Femenino</label>
		<input type="radio" name="genero" value="F"/>
		<label>Masculino</label>
		<input type="radio" name="genero" value="M"/>
		</br>
		<input type="submit" name="Enviar Formulario" value="Enviar Formulario" /><br/>

	</div>
  </div>
 </div><!-- cerrando division de datos -->
</form>
</body>
</html>

