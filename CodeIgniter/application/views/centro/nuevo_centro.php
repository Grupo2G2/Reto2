<div>
	


	<!--------------------SECCIÓN FORMULARIO-------------------->
	
	<div class='divfiltro'>
	<h1>Añadir Centro</h1>	
		
		<?php
    		/*--------------------ARRAY DEL FORMULARIO-------------------*/

			$formularioCentro = array(
				'name' => 'formularioCentro'
			);

			/*--------------------FIN ARRAY DEL FORMULARIO-------------------*/


			/*---------------------------------------------------*/

			/*--------------------ARRAY DEL CÓDIGO DEL CENTRO-------------------*/

			$COD_Centro = array(
				'name' => 'COD_Centro',
				'placeholder' => 'Código del centro',
				'maxlength' => 20,
				'size' => 20
			);

			/*--------------------FIN ARRAY DEL CÓDIGO DEL CENTRO-------------------*/


			/*---------------------------------------------------*/

			/*--------------------ARRAY DE LA DESCRIPCIÓN DEL CENTRO-------------------*/

			$DESC_Centro = array(
				'name' => 'DESC_Centro',
				'placeholder' => 'Descripción del centro',
				'maxlength' => 20,
				'size' => 20
			);

			/*--------------------FIN ARRAY DE LA DESCRIPCIÓN DEL CENTRO-------------------*/
		?>

		<?php echo form_open('Centro/nuevo_centro',$formularioCentro);?>

		<?php echo "<div class='divselect'>" ?>
		<?php echo form_label('Código del centro: ','COD_Centro'); ?>
		<?php echo form_input($COD_Centro); ?>
		<?php echo("</div>"); ?>


		<?php echo "<div class='divselect'>" ?>
		<?php echo form_label('Descripción del centro: ','DESC_Centro'); ?>
		<?php echo form_input($DESC_Centro); ?>
		<?php echo("</div>"); ?>
	</div>	



		
		<div class="divbotones">
		<?php echo form_submit('Crear','Crear'); ?>
		<?php echo form_close();?>
		<button id="botonVolver" class="boton">Volver</button>
		</div>



	<!--------------------FIN SECCIÓN FORMULARIO-------------------->
	



</div>



<!-------------------------------------------------------------------->


<!----------SCRIPT---------->


<script>
	

	/*----------AL CARGAR EL DOCUMENTO----------*/

	$(document).ready(function(){


		/*----------AL CLICAR EN EL BOTÓN VOLVER----------*/


		//CUANDO SE CLICA EN EL BOTÓN VOLVER.
		$("#botonVolver").click(function(){
    		
    		//VUELVE A LA PÁGINA PRINCIPAL DE CENTRO.
    		window.location.href = "../Centro";
	    });

		/*----------FIN AL CLICAR EN EL BOTÓN VOLVER----------*/


	});

	/*----------FIN AL CARGAR EL DOCUMENTO----------*/

</script>


<!----------FIN SCRIPT---------->	