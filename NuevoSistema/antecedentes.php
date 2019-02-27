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
								<li class="nav-item">
									<a class="nav-link">Datos Personales</a>

									
								</li>
								

								<li class="nav-item col-10">
									<a class="nav-link active bg-dark" href="#">Antecedentes</a>

									
								</li>

								<li class="nav-item">
									<a class="nav-link">Antecedentes de Importancia</a>

									
								</li>
								
							</ul>
						</section>
					</div>
				
				

<?php
        

        $Nombre=$_POST['nombre'];
        $APaterno=$_POST['ap_paterno'];
        $AMaterno=$_POST['ap_materno'];
        $FechaNac=$_POST['fecha'];
        $cumpleanos = new DateTime($FechaNac);
         $hoy = new DateTime();
         $annos = $hoy->diff($cumpleanos);
        $Edad=$annos->y;
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
                
        if($EmbarazoA=="1"){
        		$Perdida=$_POST['perdida'];

        		if ($Perdida =="2") {
        			$Fechab=$_POST['fechab'];
        		}else{$Fechab="0";}
                
                $Resolucion=$_POST['resolucion'];
                $Lactancia=$_POST['lactancia'];
                $Intraparto=$_POST['intraparto'];
                $PostParto=$_POST['postparto'];

       
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




					<div class="col-6">
					<!-- Content -->
					<br><br>
			<form action="Antecedentes2.php" method="post">
							<h3>Factor</h3>
							<input class="" name="factor" id="factor" type="text" size="50" placeholder="Factor" required>
							<br><br>
							<h3>Inicio de Relaciones Sexuales</h3>
							<input class="form-control" name="inicio_sex" id="inicio_sex" type="date" required>
							<br><br>
							<h3>Numero de Parejas</h3>
							<input class="form-control" name="num_parejas" id="num_parejas" type="number"  placeholder="Numero de Parejas" required>
							<br><br>
							<h3>Usa Anticonceptivo</h3>
							<input type="radio" name="antico" value="1" data-toggle="collapse" href="#collapseExample">SI   <input type="radio" name="antico" value="2">NO
							<br><br>
							<div class="collapse" id="collapseExample">
							<h3>Cual?</h3>
							<select class="form-control" id="metodo_antico" name="metodo_antico">
								<option>Seleccione</option>
								<option>Condón</option>
								<option>Pastilla</option>  
								<option>Parche</option>
								<option>DIU</option>
							</select>	
						    <br><br>
							</div>
							<h3>Fecha  de Diagnostico</h3>
							<input class="form-control" name="fecha_diagnostico" id="fecha_diagnostico" type="date" required>
							<br><br>
							<h3>Metodo de Diagnostico</h3>
							<select id="metodo_diagnostico" name="metodo_diagnostico" class="form-control" required>
								<option>Seleccione</option>
								<option>Prueba de Eliza</option>
								<option>Prueba Rápida</option>  
								<option>Western Blot</option>
								<option>PCR</option>
							</select>	
						    <br><br>
						    <h3>Fecha probable de infección</h3>
							<input class="form-control" name="fecha_pro_inf" id="fecha_pro_inf" type="date" required>
							<br><br>
							<h3>Inicio de Manifestación</h3>
							<input class="form-control" name="fecha_ini_man" id="fecha_ini_man" type="date" required>
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
							
							<button type="submit" class="btn btn-dark">Avanzar</button>
							</form>
					</div>
					
				</div>
			</div>
		</div>
	
	</body>
</html>