<?php 
	$id = $_POST['ide'];

	$html="<a class='btn bg-dark btn-lg'  style='color: white'  name='BuscarC' id='buscarC'  href='Cita_Paciente.php?ID=".$id."'>Cita</a>";
	$html.="&nbsp <a class='btn bg-dark btn-lg' style='color: white' name='BuscarP' id='buscarP' href='DatosPaciente.php?ID=".$id."'>Datos del Paciente </a>";
	echo $html;
 ?>
