<?php
	require('../conexion.php');
	$id_opc2 = $_POST['id_opc2'];

	$query2 = "SELECT * FROM ".$id_opc2;
	$resultado2 = $mysqli->query($query2);

	$html =  "<option value='0'>Elige</option>";

	while($row = $resultado2->fetch_assoc())
	{
		$html.= "<option value='".$row['id_localidad']."'>".$row['localidad']."</option>";
	}

	echo $html;
?>
