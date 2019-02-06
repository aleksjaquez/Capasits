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
									<a class="nav-link active">Antecedentes</a>

									
								</li>
								<li class="nav-item">
									<a class="nav-link disabled"></a>
									
								</li>
								<li class="nav-item">
									<a class="nav-link disabled">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>
									
								</li>

								<li class="nav-item">
									<a class="nav-link disabled">Antecedentes de Importancia</a>

									
								</li>
								
							</ul>
						</section>
					</div>
					
<?php
        

        $Nombre=$_POST['nombre'];
        $APaterno=$_POST['ap_paterno'];
        $AMaterno=$_POST['ap_materno'];
        $Edad="0";
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

         
        
        
        if($Derechohab=="1"){

            $Instit=$_POST['institucion'];
            $Seg_Popular=$_POST['seg_popular'];
        }else{
        	$Instit="0";
            $Seg_Popular="0";
        }
        
        if($Sexo=="2"){
           
                $EmbarazoA=$_POST['embarazoA'];
                $Perdida=$_POST['perdida'];
                $Fechab=$_POST['fechab'];
                $Resolucion=$_POST['resolucion'];
                $Lactancia=$_POST['lactancia'];
                $Intraparto=$_POST['intraparto'];
                $PostParto=$_POST['postparto'];

        if($EmbarazoA=="1"){
       
                if($Intraparto=="1"){
                    $TipoI=$_POST['tipoi'];
                    $TiempoI=$_POST['tiempoi'];


                    if ($PostParto=="1") {
                       $TipoP=$_POST['tipop'];
                       $TiempoP=$_POST['tiempop'];

                    }else{
                    	$TipoP="0";
                		$TiempoP="0";
                    }

                }else{
                	 $TipoI="0";
                	 $TiempoI="0";

                    if ($PostParto=="1") {
                       $TipoP=$_POST['tipop'];
                       $TiempoP=$_POST['tiempop'];   

                    }else{
                    	$TipoP="0";
                		$TiempoP="0";
                    }

                }

                
          }else{
          		$TipoI="0";
                $TiempoI="0";
                $TipoP="0";
                $TiempoP="0";
          }      

    }else{
    			$EmbarazoA="0";
                $Perdida="0";
                $Fechab="0";
                $Resolucion="0";
                $Lactancia="0";
                $Intraparto="0";
                $PostParto="0";
                $TipoI="0";
                $TiempoI="0";
                $TipoP="0";
                $TiempoP="0";

    }

    /*$queryID = "SELECT id_datos FROM datos WHERE (ap_paterno='$APaterno' and ap_materno='$AMaterno' and fecha='$FechaNac' )";
    $Result = $link->query($queryID);

    $row = $Result->fetch_assoc()
    $ID  = $row["id_datos"];
    */ 

?>




					<!-- Content -->
					<div id="content" class="8u skel-cell-important">
						<section>
			<form action="Antecedentes2.php" method="post">
							<h3>factor</h3>
							<input class="" name="factor" id="factor" type="text" size="50" placeholder="Factor" required>
							<br><br>
							<h3>inicio de Relaciones Sexuales</h3>
							<input class="" name="inicio_sex" id="inicio_sex" type="date" required>
							<br><br>
							<h3>Numero de parejas</h3>
							<input class="" name="num_parejas" id="num_parejas" type="number"  placeholder="Numero de Parejas" required>
							<br><br>
							<h3>Usa anticonceptivo</h3>
							<input type="radio" name="antico" value="1" data-toggle="collapse" href="#collapseExample">SI   <input type="radio" name="antico" value="2">NO
							<br><br>
							<div class="collapse" id="collapseExample">
							<h3>Cual?</h3>
							<select id="metodo_antico" name="metodo_antico">
								<option>Seleccione</option>
								<option>Condón</option>
								<option>Pastilla</option>  
								<option>Parche</option>
								<option>DIU</option>
							</select>	
						    <br><br>
							</div>
							<h3>fecha  de diagnostico</h3>
							<input class="" name="fecha_diagnostico" id="fecha_diagnostico" type="date" required>
							<br><br>
							<h3>Metodo de Diagnostico</h3>
							<select id="metodo_diagnostico" name="metodo_diagnostico" required>
								<option>Seleccione</option>
								<option>Prueba de Eliza</option>
								<option>Prueba Rápida</option>  
								<option>Western Blot</option>
								<option>PCR</option>
							</select>	
						    <br><br>
						    <h3>Fecha probable de infección</h3>
							<input class="" name="fecha_pro_inf" id="fecha_pro_inf" type="date" required>
							<br><br>
							<h3>Inicio de Manifestación</h3>
							<input class="" name="fecha_ini_man" id="fecha_ini_man" type="date" required>
							<br><br>
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
							
							<button type="submit" class="btn btn-dark">Guardar y avanzar</button>
							</form>
					</div>
					
				</div>
			</div>
		</div>
	
	</body>
</html>