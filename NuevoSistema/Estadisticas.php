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
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script language="javascript" src="js/jquery-3.1.1.min.js"></script>
	<script language="javascript">
			$(document).ready(function(){
				$("#cbx_opc1").change(function () {
 
					//$('#cbx_localidad').find('option').remove().end().append('<option value="whatever"></option>').val('whatever');
					
					$("#cbx_opc1 option:selected").each(function () {
						id_opc1 = $(this).val();
						$.post("includes/getOpc2.php", { id_opc1: id_opc1 }, function(data){
							$("#cbx_opc2").html(data);
						});            
					});
				})
			});

			$(document).ready(function(){
				$("#cbx_opc2").change(function () {
 
					//$('#cbx_localidad').find('option').remove().end().append('<option value="whatever"></option>').val('whatever');
					
					$("#cbx_opc2 option:selected").each(function () {
						id_opc2 = $(this).val();
						$.post("includes/getOpc3.php", { id_opc2: id_opc2 }, function(data){
							$("#cbx_opc3").html(data);
						});            
					});
				})
			});
	</script>
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
					      <li class="nav-item active">
					        <a class="nav-link" href="#">Estadisticas</a>
					      </li>
					    </ul>
				  </div>
				</nav>
			
		</header>

		<!-- Main -->
		<div id="main">
			<div class="container">
				<br><br><br><br><br>

				<form  method="post" id="combo" name="combo" action="PdfyG.php" >
					<div class="row">
						<div class="col">
						  <label class="my-1 mr-2" for="inlineFormCustomSelectPref"></label>
						  <select class="custom-select my-1 mr-sm-2" id="cbx_opc1" name="cbx_opc1">
						    <option selected value="0">Elige</option>
						    <option value="1">Paciente</option>
						    <option value="2">Cita</option>
						  </select>
						</div>  
						  
						<div class="col">
							<label class="my-1 mr-2" for="inlineFormCustomSelectPref"></label>
						  <select class="custom-select my-1 mr-sm-2" id="cbx_opc2" name="cbx_opc2">
						    
						  </select>
						</div>

						<div class="col">
							<label class="my-1 mr-2" for="inlineFormCustomSelectPref"></label>
						  <select class="custom-select my-1 mr-sm-2" id="cbx_opc3" name="cbx_opc3">
						    
						  </select>
						</div>
						  
						<div class="col">
						  <label class="my-1 mr-2" for="inlineFormCustomSelectPref"></label>
						  <button type="button" class="btn btn-outline-success btn-lg btn-block " id="plus1">+</button>
						</div>
					</div>
					<div class="row">
						<div class="col">
						  <button type="submit" class="btn btn-success my-1" id="consulta">Consultar</button>
						</div>
					</div>

				</form>

				<div id="resultado"></div>
					
				</div>
			</div>
		
	</div>
	</body>
</html>