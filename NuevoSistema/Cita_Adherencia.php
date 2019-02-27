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
	<link rel="stylesheet" href="css/style.css" />
	</head>
	<body class="homepage">

		<!-- Header -->
		<header>
				<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
					<a class="navbar-brand" href="#">Capasits</a>

					<div class="collapse navbar-collapse" id="navbarNav">
					    <ul class="navbar-nav">
					      <li class="nav-item">
					        <a class="nav-link" href="index.php">Registrar Paciente <span class="sr-only">(current)</span></a>
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
		<?php
			$ID = $_REQUEST['ID'];
			include("conexion.php");
			$result = $conexion->query("SELECT nombre, ap_paterno FROM datos WHERE id_datos=$ID");
			$row = $result->fetch_assoc();
			$nombre=$row['nombre'];
			$Ap=$row['ap_paterno'];
			
		?>
		<!-- Main -->
		<div id="main">
			<h3 align="right" >Paciente: <?php echo $nombre." ".$Ap;?></h3>		
			<div class="container">
				<div class="row justify-content-start"> 

					<!-- Sidebar -->
					<div id="sidebar" class="col-4">
						<section>
							<br><br>
							<ul class="nav flex-column nav-pills" flex-sm-column>
								<li class="nav-item col-10">
									<a class="nav-link">Datos iniciales</a>
								</li>

								<li class="nav-item col-10">
									<a class="nav-link">Estadificación</a>
								</li>

								<li class="nav-item col-10">
									<a class="nav-link">Tratamiento</a>
								</li>

								<li class="nav-item col-10">
									<a class="nav-link">Tratamiento Antifimico</a>
								</li>

								<li class="nav-item col-10">
									<a class="nav-link">Tratamiento Antirretroviral</a>
								</li>

								<li class="nav-item col-10">
									<a class="nav-link active bg-dark" href="#">Adherencia</a>
								</li> 

								<li class="nav-item col-10">
									<a class="nav-link">Embarazo Actual</a>
								</li>

								<li class="nav-item col-10">
									<a class="nav-link">Tratamiento Profilaxis</a>
								</li>
								
							</ul>
						</section>
					</div>	

					<!-- Content -->
					<div id="content" class="8u skel-cell-important">
						<section>
							<header>
								<h2>Adherencia</h2>
							</header>
							<form>
							<h3>Adherencia</h3>
							<input class="form-control" name="adherencia_por" id="adherencia_por" type="number" max="100" step=".1" placeholder="En porcentaje" required>
							<br><br>							
							<h3>Esquema</h3>
							<input type="radio" name="esquema" value="1"> 1ro 
							<input type="radio" name="esquema" value="2"> 2do
							<input type="radio" name="esquema" value="3"> 3ro 
							<input type="radio" name="esquema" value="4"> 4to
							<br><br>
							<h3>Modificacion</h3>							
							<input name="modificacion_esquema" type="radio" value="1" class="yes" data-toggle="collapse" data-target="#collapseOne"/> Si
         					<input name="modificacion_esquema" type="radio" value="2" class="no" data-toggle="collapse" data-target="#collapseOne" checked/> No       
         					<br><br>
         					<pp>            				
            					<h3>Anterior</h3>								
            					<input class="form-control" type="text" name="adh_anterior" max="45" placeholder="Adherencia anterior" required>
         					</pp>         															
							<br><br>							
							<button type="submit" class="btn btn-dark" href="Cita_EmbarazoActual?ID=<php echo $ID;?>">Guardar y avanzar</button>
							</form>
					</div>					
				</div>
			</div>
		</div>	
	</body>
</html>