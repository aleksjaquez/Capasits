jQuery(document).ready(function(){
	
	jQuery("#plus1").click(function(){		
		//cogemos el valor del input
		var opc = jQuery("#opc1").val();
		
		//creamos array de parámetros que mandaremos por POST
		var params = {
			"opcion1" : opc
		};
				
		//llamada al fichero PHP con AJAX
		$.ajax({
			data:  params,
			url:   'ajax/Opcion.php',
			dataType: 'php',
			type:  'post',
			/*beforeSend: function () {
				//mostramos gif "cargando"
				jQuery('#loading_spinner').show();
				//antes de enviar la petición al fichero PHP, mostramos mensaje
				jQuery("#resultado").html("Déjame pensar un poco...");
			},*/
			success:  function () {
				//escondemos gif
				//jQuery('#loading_spinner').hide();
				//mostramos salida del PHP
				jQuery("#resultado").html(data);
				
			}
		});
	
		
	});
		
	
});