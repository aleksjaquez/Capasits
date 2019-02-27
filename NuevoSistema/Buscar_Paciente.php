<!DOCTYPE HTML>


	<head>
		<title>Capasists</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<!-- BOOTSTRAP -->
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css" integrity="sha384-PDle/QlgIONtM1aqA2Qemk5gPOE7wFq8+Em+G/hmo5Iq0CCmYZLv3fVRDJ4MMwEA" crossorigin="anonymous">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="css/style.css" />
	<script type="text/javascript" src="js/jquery-1.12.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="js/jquery-ui.css">
	<script type="text/javascript" src="js/jquery-ui.js"></script>

	

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
					      <li class="nav-item active">
					        <a class="nav-link" href="#">Buscar Paciente</a>
					      </li>
					      <li class="nav-item">
					        <a class="nav-link" href="Estadisticas.php">Estadisticas</a>
					      </li>
					    </ul>
				  </div>
				</nav>
			
		</header>
<!-- Main -->
		<div id="main">
			<div class="container"> 
					</br>
					</br>
					</br>
					</br>
					</br>
					<!-- Content -->
					<div id="content" >
						
							<center>
							<header>
								</br>
								<h2>Nombre del Paciente</h2>
								</br>
								</br>
							</header>
						</center>
					</div>
					<div id="izquierda"></div>
   					<div id="derecha"></div>
					<div class="contenido">	
						<?php  
						include("conexion.php");
						$result = $conexion->query("SELECT * FROM datos");
						$array = array();
						$array2 = array();
						$Usuario = array();
						$i=0;
						if($result){
							while ($row = $result->fetch_assoc()) {
								$id = $row['id_datos'];
								$Nombre = utf8_encode($row['nombre']." ".$row['ap_paterno']." ".$row['ap_materno']);
								
								$Usuario['id'] = $id;
								$Usuario['nombre'] = $Nombre;

								array_push($array, $Usuario);
								array_push($array2, $Nombre);

							}

						}

/**/
						?>
							
							
							<center>
							<input class="form-control" name="Usuario" id="Usuario" type="text" size="50" placeholder="Usuario" required>
							</br>
							</br>
							</br>
							<div id="elid"></div>
						
					</div>

				<script type="text/javascript">
					
					$(document).ready(function () {
						var items = <?= json_encode($array2) ?>;
						var id;
						$("#Usuario").autocomplete({
							source: items,

							select: function (event,item) {
								var nombres = item.item.value;
								var params = {
									ide: obtener(nombres)
								};

								$.post("includes/getId.php", params, function(data){
								$("#elid").html(data);
								
							}); 
								
							}
						});
						
							
						
					});

					function obtener(valor){
					  var items = <?= json_encode($array) ?>;
					  
					  for(var i = 0; i < items.length; i++){
					    if(items[i].nombre == valor){;
					      return items[i].id;

					    }
					  }
					}

				</script>	
				
			</div>

		</div>
	</body>
</html>