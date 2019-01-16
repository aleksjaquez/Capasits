<!DOCTYPE HTML>
<!--
	Iridium by TEMPLATED
    templated.co @templatedco
    Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Capasits</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link href='http://fonts.googleapis.com/css?family=Arimo:400,700' rel='stylesheet' type='text/css'>
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
		
	</head>
	<body>

		<!-- Header -->
		<div id="header">
			<div class="container"> 
				
				<!-- Logo -->
				<div id="logo">
					<h1><a href="#">CAPASITS</a></h1>
					<!-- <span>Design by TEMPLATED</span>-->
				</div>
				
				<!-- Nav -->
				<nav id="nav">
					<ul>

						<li><a href="index.html">Inicio</a></li>
						<li class="active"><a href="#">Registrar Paciente</a></li>
						<li><a href="Buscar_Paciente.html">Buscar Paciente</a></li>
						<li><a href="Citas.html">Citas</a></li>
						<li><a href="no-sidebar.html">Estadisticas</a></li>
					</ul>
				</nav>
			</div>
		</div>

		<!-- Main -->
		<div id="main">
			<div class="container">
				<div class="row"> 

					<!-- Sidebar -->
					<div id="sidebar" class="4u">
						<section>
							<ul class="nav nav-pills" aria-orientation="vertical">
								<li class="nav-item">
									<a class="nav-link disabled">Datos Personales</a>

									
								</li>
								<li class="nav-item">
									<a class="nav-link disabled">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>
									
								</li>

								<li class="nav-item">
									<a class="nav-link disabled">Antecedentes</a>

									
								</li>
								<li class="nav-item">
									<a class="nav-link disabled">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>
									
								</li>

								<li class="nav-item">
									<a class="nav-link active">Antecedentes de Importancia</a>

									
								</li>
							</ul>
						</section>
					</div>
					
 <?php

        $Factor=$_POST['factor'];
        $Sex=$_POST['inicio_sex'];
        $Pareja=$_POST['num_parejas'];
        $Antico=$_POST['antico'];
        
        $FechaD=$_POST['fecha_diagnostico'];
        $MetodoD=$_POST['metodo_diagnostico'];
        $FechaInf=$_POST['fecha_pro_inf'];
        $FechaMan=$_POST['fecha_ini_man'];

        
        if($Antico=="1"){

            $MAntico=$_POST['metodo_antico'];
            
        }else{
        	$MAntico="0";
        }



        $Nombre=$_POST['nombre'];
        $APaterno=$_POST['ap_paterno'];
        $AMaterno=$_POST['ap_materno'];
        $Edad=$_POST['edad'];
        $FechaNac=$_POST['fecha'];
        $Nacionalidad=$_POST['nacionalidad'];
        $EstadoCivil=$_POST['edo_civil'];
        $Derechohab=$_POST['derecho'];
        $Ocupacion=$_POST['ocupacion'];
        $Origen=$_POST['origen'];
        $Calle=$_POST['calle'];
        $Numero=$_POST['numero'];
        $Colonia=$_POST['colonia'];
        $Codigo=$_POST['codigo'];
        $Localidad=$_POST['localidad'];
        $Estado=$_POST['estado'];
        $Tel=$_POST['telefono'];
        $Sexo=$_POST['sexo'];
		$Instit=$_POST['institucion'];
        $Seg_Popular=$_POST['seg_popular'];       
    	$EmbarazoA=$_POST['embarazoA'];
        $Perdida=$_POST['perdida'];
        $Fechab=$_POST['fechab'];
        $Resolucion=$_POST['resolucion'];
        $Lactancia=$_POST['lactancia'];
        $Intraparto=$_POST['intraparto'];
        $PostParto=$_POST['postparto'];
        $TipoI=$_POST['tipoi'];
        $TiempoI=$_POST['tiempoi'];
        $TipoP=$_POST['tipop'];
        $TiempoP=$_POST['tiempop'];

    
 

?> 


					<!-- Content -->
					<div id="content" class="8u skel-cell-important">
						<section>
				<form action="Registro_Antecedentes2.php" method="post">
							<h3>Antecedentes Heredofamiliares</h3>
							<textarea name="ant_heredofamiliares" id="ant_heredofamiliares" rows="4" cols="70" placeholder="Escribe aquí los antecedentes" required></textarea>
							<br><br>
							<h3>Escolaridad</h3>
							<select id="escolaridad" name="escolaridad" required>
								<option>Seleccione</option>
								<option>Prescolar</option>
								<option>Primaria</option> 
								<option>Secundaria</option>
								<option>Prepa-bachillerato</option>
								<option>Licenciatura</option>
								<option>Maestría</option>
								<option>Doctorado</option>
								<option>Post-Doctorado</option>
							</select>	
						    <br><br>
							<h3>Tipo de Vivienda</h3>
							<select id="vivienda" name="vivienda" required>
								<option>Seleccione</option>
								<option>Urbana</option>
								<option>Rural</option>  
							</select>	
						    <br><br>
							<h3>Viajes Recientes</h3>
							<input type="radio" name="viajes_rec" value="1" data-toggle="collapse" href="#collapseExample">SI   <input type="radio" name="viajes_rec" value="2">NO	
						    <br><br>
						    <div class="collapse" id="collapseExample">
							<h3>Cuales?</h3>
							<input class="" name="viajes" id="viajes" type="text" size="50" placeholder="Separar con coma" >
						    <br><br>
							</div>
							<h3>Convivencia con animales</h3>
							<input type="radio" name="conv_animales" value="1" data-toggle="collapse" href="#collapseExample2">SI   <input type="radio" name="conv_animales" value="2">NO	
							<br><br>
							<div class="collapse" id="collapseExample2">
							<h3>Cuáles?</h3>
							<input type="checkbox" id="mascotas" name="mascotas" value="Perro">Perros &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
							<input type="checkbox" id="mascotas" name="mascotas" value="Gato">Gatos &nbsp&nbsp&nbsp&nbsp&nbsp
							<input type="checkbox" id="mascotas" name="mascotas" value="Ave">Aves &nbsp&nbsp&nbsp&nbsp&nbsp
							<input type="checkbox" id="mascotas" name="mascotas" value="Reptil">Reptiles<br>
							<input type="checkbox" id="mascotas" name="mascotas" value="Roedor">Roedores &nbsp
							<input type="checkbox" id="mascotas" name="mascotas" value="Anfibio">Anfibios &nbsp&nbsp
							<input type="checkbox" id="mascotas" name="mascotas" value="Otro">Otros<br>	
						    <br><br>
						</div>
						    <h3>Tabaquismo</h3>
							<input type="radio" name="tabaquismo" value="1" data-toggle="collapse" href="#collapseExample3">Activo   <input type="radio" name="tabaquismo" value="2">No Activo
							<br><br>
							<div class="collapse" id="collapseExample3">
							<h3>Cantidad</h3>
							<input class="" name="tab_cantidad" id="tab_cantidad" type="number" size="10" placeholder="Cantidad">
							<br><br>
							<h3>Frecuencia</h3>
							<select id="tab_frecuencia" name="tab_frecuencia">
								<option>Seleccione</option>
								<option>Diaria</option>
								<option>Semanal</option>
								<option>Mensual</option>  
							</select>	
							<br><br>
							<h3>Años de Adicción</h3>
							<input class="" name="tab_años" id="tab_años" type="number" size="10" placeholder="Años">
							<br><br>
						</div>
							<h3>Alcoholismo</h3>
							<input type="radio" name="alcoholismo" value="1" data-toggle="collapse" href="#collapseExample4">Activo   <input type="radio" name="alcoholismo" value="2">No Activo
							<br><br>
							<div class="collapse" id="collapseExample4">
							<h3>Cantidad</h3>
							<input class="" name="alc_cantidad" id="alc_cantidad" type="number" size="10" placeholder="Cantidad">
							<br><br>
							<h3>Frecuencia</h3>
							<select id="alc_frecuencia" name="alc_frecuencia">
								<option>Seleccione</option>
								<option>Diaria</option>
								<option>Semanal</option>
								<option>Mensual</option>  
							</select>	
							<br><br>
							<h3>Años de Adicción</h3>
							<input class="" name="alc_años" id="alc_años" type="number" size="10" placeholder="Años">
							<br><br>
						</div>
							<h3>Inmunización</h3>
							<input type="radio" name="inmunizacion" value="1" data-toggle="collapse" href="#collapseExample5">SI   <input type="radio" name="inmunizacion" value="2">NO
							<br><br>
							<div class="collapse" id="collapseExample5">
							<h3>Cuáles?</h3>
							<input class="" name="CInmun" id="CInmun" type="text" size="50" placeholder="Separar con coma">
						    <br><br>
						</div>
						    <h3>Cirugias</h3>
							<input type="radio" name="cirugias" value="1" data-toggle="collapse" href="#collapseExample6">SI   <input type="radio" name="cirugias" value="2">NO
							<br><br>
							<div class="collapse" id="collapseExample6">
							<h3>Cuáles?</h3>
							<input class="" name="CCiru" id="CCiru" type="text" size="50" placeholder="Separar con coma">	
						    <br><br>
						</div>
						    <h3>Fracturas</h3>
							<input type="radio" name="fracturas" value="1" data-toggle="collapse" href="#collapseExample7">SI   <input type="radio" name="fracturas" value="2">NO
							<br><br>
							<div class="collapse" id="collapseExample7">
							<h3>Cuáles?</h3>
							<input class="" name="CFrac" id="CFrac" type="text" size="50" placeholder="Separar con coma">
						    <br><br>
						</div>
						    <h3>Alergias</h3>
							<input type="radio" name="alergias" value="1" data-toggle="collapse" href="#collapseExample8">SI   <input type="radio" name="alergias" value="2">NO
							<br><br>
							<div class="collapse" id="collapseExample8">
							<h3>Cuáles?</h3>
							<input class="" name="CAler" id="CAler" type="text" size="50" placeholder="Separar con coma">	
						    <br><br>
						</div>
						    <h3>Otros Medicamentos</h3>
							<input type="radio" name="otros_medicamentos" value="1" data-toggle="collapse" href="#collapseExample9">SI   <input type="radio" name="otros_medicamentos" value="2">NO
							<br><br>
							<div class="collapse" id="collapseExample9">
							<h3>Cuáles?</h3>
							<input class="" name="CMed" id="CMed" type="text" size="50" placeholder="Separar con coma">	
						    <br><br>
							</div>

							<input type="hidden"  name="nombre" value="<?php echo $Nombre; ?>" id="nombre">
							<input type="hidden"  name="ap_paterno" value="<?php echo $APaterno; ?>" id="ap_paterno">
							<input type="hidden"  name="ap_materno" value="<?php echo $AMaterno; ?>" id="ap_materno">
							<input type="hidden"  name="edad" value="<?php echo $Edad; ?>" id="edad">
							<input type="hidden"  name="fecha" value="<?php echo $FechaNac; ?>" id="fecha">
							<input type="hidden"  name="nacionalidad" value="<?php echo $Nacionalidad; ?>" id="nacionalidad">
							<input type="hidden"  name="edo_civil" value="<?php echo $EstadoCivil; ?>" id="edo_civil">
							<input type="hidden"  name="derecho" value="<?php echo $Derechohab; ?>" id="derecho">
							<input type="hidden"  name="ocupacion" value="<?php echo $Ocupacion; ?>" id="ocupacion">
							<input type="hidden"  name="origen" value="<?php echo $Origen; ?>" id="origen">
							<input type="hidden"  name="calle" value="<?php echo $Calle; ?>" id="calle">
							<input type="hidden"  name="numero" value="<?php echo $Numero; ?>" id="numero">
							<input type="hidden"  name="colonia" value="<?php echo $Colonia; ?>" id="colonia">
							<input type="hidden"  name="codigo" value="<?php echo $Codigo; ?>" id="codigo">
							<input type="hidden"  name="localidad" value="<?php echo $Localidad; ?>" id="localidad">
							<input type="hidden"  name="estado" value="<?php echo $Estado; ?>" id="estado">
							<input type="hidden"  name="telefono" value="<?php echo $Tel; ?>" id="telefono">
							<input type="hidden"  name="sexo" value="<?php echo $Sexo; ?>" id="sexo">
							<input type="hidden"  name="institucion" value="<?php echo $Instit; ?>" id="institucion">
							<input type="hidden"  name="seg_popular" value="<?php echo $Seg_Popular; ?>" id="seg_popular">
							<input type="hidden"  name="embarazoA" value="<?php echo $EmbarazoA; ?>" id="embarazoA">
							<input type="hidden"  name="perdida" value="<?php echo $Perdida; ?>" id="perdida">
							<input type="hidden"  name="fechab" value="<?php echo $Fechab; ?>" id="fechab">
							<input type="hidden"  name="resolucion" value="<?php echo $Resolucion; ?>" id="resolucion">
							<input type="hidden"  name="lactancia" value="<?php echo $Lactancia; ?>" id="lactancia">
							<input type="hidden"  name="intraparto" value="<?php echo $Intraparto; ?>" id="intraparto">
							<input type="hidden"  name="postparto" value="<?php echo $PostParto; ?>" id="postparto">
							<input type="hidden"  name="tipoi" value="<?php echo $TipoI; ?>" id="tipoi">
							<input type="hidden"  name="tiempoi" value="<?php echo $TiempoI; ?>" id="tiempoi">
							<input type="hidden"  name="tipop" value="<?php echo $TipoP; ?>" id="tipop">
							<input type="hidden"  name="tiempop" value="<?php echo $TiempoP; ?>" id="tiempop">

							<input type="hidden"  name="factor" value="<?php echo $Factor; ?>" id="factor">
							<input type="hidden"  name="inicio_sex" value="<?php echo $Sex; ?>" id="inicio_sex">
							<input type="hidden"  name="num_parejas" value="<?php echo $Pareja; ?>" id="lactancia">
							<input type="hidden"  name="antico" value="<?php echo $Antico; ?>" id="antico">
							<input type="hidden"  name="fecha_diagnostico" value="<?php echo $FechaD; ?>" id="fecha_diagnostico">
							<input type="hidden"  name="metodo_diagnostico" value="<?php echo $MetodoD; ?>" id="metodo_diagnostico">
							<input type="hidden"  name="fecha_pro_inf" value="<?php echo $FechaInf; ?>" id="fecha_pro_inf">
							<input type="hidden"  name="fecha_ini_man" value="<?php echo $FechaMan; ?>" id="fecha_ini_man">
							<input type="hidden"  name="metodo_antico" value="<?php echo $MAntico; ?>" id="metodo_antico">
							<button type="submit" class="btn btn-dark">Guardar y avanzar</button>
							</form>
					</div>
					
				</div>
			</div>
		</div>
	
	</body>
</html>