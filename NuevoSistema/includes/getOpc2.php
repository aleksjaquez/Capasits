<?php
	//require('../conexion.php');
	$id_opc1 = $_POST['id_opc1'];

	$html =  "<option value='0'>Elige</option>";
	if ($id_opc1=="1") {

	
						$html.="<option value='Datos'>Datos</option>
						    <option value='Antecedentes'>Antecedentes</option>
						    <option value'Antecedentes_2'>Antecedentes de importancia</option>
						    <option value'Embarazo_ant'>Embarazo anterior</option>
						    <option value'Hospitalizacion'>Hospitalización</option>";
	

						  
	}
	else if ($id_opc1=="2") {
						    
						$html.="<option value='Tratamiento_antirretroviral'>Tratamiento Antiretroviral</option>
						    <option value='Tratamiento_etapas'>Tratamiento por etapas</option>
						    <option value='Tratamiento_antifimico'>Tratamiento antifimico</option>
						    <option value='Tratamiento_profilaxis'>Tratamiento profilaxis</option>
						    <option value='Estadificacion'>Estadificación</option>
						    <option value='Adherencia'>Adherencia</option>";
	} 

	echo $html;
?>
