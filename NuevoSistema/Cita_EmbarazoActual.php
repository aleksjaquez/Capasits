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
									<a class="nav-link">Adherencia</a>
								</li>

								<li class="nav-item col-10">
									<a class="nav-link active bg-dark" href="#">Embarazo Actual</a>
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
								<h2>Embarazo Actual</h2>
							</header>
							<form>
							<h3>Embarazo Actual</h3>
							<input type="radio" name="EActual" value="1" data-toggle="collapse" href="#collapseExample">SI   <input type="radio" name="EActual" value="2">NO
							<br><br>
					<div class="collapse" id="collapseExample">
							<h3>Semana de Gestación</h3>
							<input class="form-control" name="gestacion" id="gestacion" type="number" max="99"  placeholder="Numero de semana" required>
							<br><br>
							<h3>Tratamiento Antiretroviral</h3>
							<input type="radio" name="TAnti" value="1" data-toggle="collapse" href="#collapseExample1">SI   <input type="radio" name="TAnti" value="2">NO
							<br><br>
						<div class="collapse" id="collapseExample1">	
							<h3>Semana Inicial de Tratamiento</h3>
							<input class="form-control" name="semInicial" id="semInicial" type="number" max="999" placeholder="Numero de la semana de gestacion en que inicio el tratamiento" required>
							<br><br>
						</div>	
							<h3>Esquemas</h3>
							<input type="radio" name="Esquemas" value="1" data-toggle="collapse" href="#collapseExample2">SI   <input type="radio" name="Esquemas" value="2">NO
							<br><br>
						<div class="collapse" id="collapseExample2">
							<h3>¿Cuales?</h3>
							<input class="form-control" name="ECuales" id="Ecuales" type="number" max="99" placeholder="¿Cuales Esquemas?" required><br><br>
						</div>		
							<h3>Profilaxis Intraparto</h3>
							<input type="radio" name="PIntra" value="1" data-toggle="collapse" href="#collapseExample3">SI   <input type="radio" name="PIntra" value="2">NO
							<br><br>	
						<div class="collapse" id="collapseExample3">	
							<h3>Tipo</h3>
							<input class="form-control" name="TipoEmb" id="TipoEmb" type="text"  placeholder="Tipo de Profilaxis" required><br><br>	
							<h3>Tiempo</h3>
							<input class="form-control" name="TiempoEmb" id="TiempoEmb" type="number" max="999"  placeholder="Tiempo de Profilaxis" required><br><br>
						</div>		
					</div>


							<button type="submit" class="btn btn-dark" href="Cita_Profilaxis?ID=<php echo $ID;?>">Guardar y avanzar</button>
							</form>
					</div>					
				</div>
			</div>
		</div>	
	</body>
</html>