<!DOCTYPE HTML>


	<head>
		<title>Capasists</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<!-- BOOTSTRAP -->
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" integrity="sha384-PDle/QlgIONtM1aqA2Qemk5gPOE7wFq8+Em+G/hmo5Iq0CCmYZLv3fVRDJ4MMwEA" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</head>
	<body class="homepage">

		<!-- Header -->
		<header>
				<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
					<a class="navbar-brand" href="#">Capasits</a>

					<div class="collapse navbar-collapse" id="navbarNav">
					    <ul class="navbar-nav">
					      <li class="nav-item active">
					        <a class="nav-link" href="#">Registrar Paciente <span class="sr-only">(current)</span></a>
					      </li>
					      <li class="nav-item">
					        <a class="nav-link" href="Buscar_Paciente.php">Buscar Paciente</a>
					      </li>
					      <li class="nav-item">
					        <a class="nav-link" href="Estadisticas.php">Estadisticas</a>
					      </li>
					    </ul>
				  </div>
				</nav>
			
		</header>

		<div id="main">
			<div class="container">
				<div class="row justify-content-start"> 

					<!-- Sidebar -->
					<div id="sidebar" class="col-4">
						<section>
							<br><br>
							<ul class="nav flex-column nav-pills" flex-sm-column>
								<li class="nav-item col-10">
									<a class="nav-link active bg-dark" href="#">Datos Personales</a>

									
								</li>
								

								<li class="nav-item">
									<a class="nav-link">Antecedentes</a>

									
								</li>

								<li class="nav-item">
									<a class="nav-link">Antecedentes de Importancia</a>

									
								</li>
								
							</ul>
						</section>
					</div>
				
				<div class="col-6">
					<!-- Content -->
					<br><br>
				<form action="antecedentes.php" method="post" flex-sm-column>
							<h3>Nombre</h3>
							<input class="form-control" name="nombre" id="nombre" type="text" size="50" placeholder="Nombre(s)" required>
							<br>
							<h3>Apellido Paterno</h3>
							<input class="form-control" name="ap_paterno" id="ap_paterno" type="text" size="50" placeholder="Apellido paterno" required>
							<br>
							<h3>Apellido Materno</h3>
							<input class="form-control" name="ap_materno" id="ap_materno" type="text" size="50" placeholder="Apellido materno" required>
							<!--<br><br>
							<h3>edad</h3>
							<input class="" name="edad" id="edad" type="text" size="50" placeholder="Edad" required>-->
							<br>
							<h3>Fecha de Naciemiento</h3>
							<input class="form-control"type="date" name="fecha" id="fecha" required> 
							<br>
							<h3>Nacionalidad</h3>
							<input class="form-control" name="nacionalidad" id="nacionalidad" type="text" size="50" placeholder="Nacionalidad" required>		
						    <br>
							<h3>Estado Civil</h3> 
							<select class="form-control" id="edo_civil" name="edo_civil" required>
								<option>Seleccione</option>
								<option value="Soltero">Soltero</option>
								<option value="Comprometido">Comprometido</option>
								<option value="Casado">Casado</option>
								<option value="Divorciado">Divorciado</option>
								<option value="Viudo">Viudo</option>
							</select>
							<br>
							<h3>Derechohabiente</h3>
							<input type="radio" data-toggle="collapse" href="#collapseExample" name="derecho" value="1"> SI   <input type="radio" name="derecho" value="2">NO
							<br>
							<div class="collapse" id="collapseExample">
							
							<h3>Institución</h3>
							<input class="form-control" name="institucion" id="institucion" type="text" size="50" placeholder="Institucion" >		
						    <br>
							<h3>Folio Seguro Popular</h3>
							<input class="form-control"  name="seg_popular" id="seg_popular" type="text" size="50" placeholder="Folio de seguro popular" >
							<br>		
						    </div>
							<h3>Ocupación</h3>
							<input class="form-control" name="ocupacion" id="ocupacion" type="text" size="50" placeholder="Ocupación" required>		
						    <br>
						    <h3>Lugar de Origen</h3>
							<input class="form-control" name="origen" id="origen" type="text" size="50" placeholder="Lugar de origen" required>		
						    <br>
						    <h3>Domicilio</h3>
						    <div class="row">
							<input class="form-control col-10" name="calle" id="calle" type="text" size="35" placeholder="Calle" required>
							<input class="form-control col-2" name="numero" id="numero" type="text" size="35" placeholder="Número" required>
							<input class="form-control col-10" name="colonia" id="colonia" type="text" size="35" placeholder="Colonia" required>
							<input class="form-control col-2" name="codigo" id="codigo" type="text" size="35" placeholder="C.P" required>
							<input class="form-control col-6" name="localidad" id="localidad" type="text" size="35" placeholder="Localidad" required>
							<input class="form-control col-6" name="estado" id="estado" type="text" size="35" placeholder="Estado" required>
							</div> 
						    <br>
						    <h3>Teléfono</h3>
							<input class="form-control" name="telefono" id="telefono" type="text" size="50" placeholder="Teléfono" required>		
						    <br>
						    <h3>Sexo</h3>
								<input type="radio"  name="sexo" value="1"> Hombre <br>  
								<input type="radio" data-toggle="collapse" href="#collapseExample1" name="sexo" value="2">Mujer
							</select>	
						    <br><br>
						    <div class="collapse" id="collapseExample1">
						    <h3>Embarazos Anteriores</h3>
							<input type="radio" name="embarazoA" value="1" data-toggle="collapse" href="#collapseExample2">SI   <input type="radio" name="embarazoA" value="2">NO
							<br><br>
							<div class="collapse" id="collapseExample2">
							<h3>Perdida del producto</h3>
							<input type="radio" name="perdida" value="1">SI   <input type="radio" name="perdida" value="2" data-toggle="collapse" href="#collapseExample5">NO
							
							<div class="collapse" id="collapseExample5">
							<br><br>
							<h3>Fecha de naciemiento</h3>
							<input class="form-control"type="date" name="fechab" id="fechab"> 
							</div>
							<br><br>
							<h3>Profilaxis intraparto</h3>
							<input type="radio" name="intraparto" value="1" data-toggle="collapse" href="#collapseExample3">SI   <input type="radio" name="intraparto" value="2">NO
							<br><br>
							<div class="collapse" id="collapseExample3">
							<h3>Tipo</h3>
							<input  class="form-control"name="tipoi" id="tipoi" type="text" size="50" placeholder="Tipo i">
							<br><br>
							<h3>Tiempo</h3>
							<input  class="form-control"name="tiempoi" id="tiempoi" type="text" size="50" placeholder="Tiempo i">	
						    <br><br>
						    </div>	
							<h3>Profilaxis Postparto</h3>
							<input type="radio" name="postparto" value="1" data-toggle="collapse" href="#collapseExample4">SI   <input type="radio" name="postparto" value="2">NO
							<br><br>
							<div class="collapse" id="collapseExample4">
							<h3>Tipo </h3>
							<input  class="form-control"name="tipop" id="tipop" type="text" size="50" placeholder="Tipo p">
							<br><br>
							<h3>Tiempo </h3>
							<input  class="form-control" name="tiempop" id="tiempop" type="text" size="50" placeholder="Tiempo p">		
						    <br><br>
							</div>
							<h3>Metodo de Resolución de Embarazo</h3>
							<input class="form-control" name="resolucion" id="resolucion" type="text" size="50" placeholder="Metodo">		
						    <br><br>
							<h3>Recibio Lactancia?</h3>
							<input type="radio" name="lactancia" value="1">SI   <input type="radio" name="lactancia" value="2">NO
							<br><br>
							</div>
							</div>	

							<button type="submit" class="btn btn-dark">Avanzar</button>
						</form>
					</div>
					
				</div>
			</div>	
		</div>

		
	</body>
</html>