<div>
	


	<!--------------------SECCIÓN FORMULARIO-------------------->
	
		<div class='divfiltro'>
		<h1>EDITAR CICLO</h1>			
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
				'value' => $centro->result()[0]->COD_Centro,
				'maxlength' => 20,
				'size' => 20
			);

			/*--------------------FIN ARRAY DEL CÓDIGO DEL CENTRO-------------------*/


			/*---------------------------------------------------*/

			/*--------------------ARRAY DE LA DESCRIPCIÓN DEL CENTRO-------------------*/

			$DESC_Centro = array(
				'name' => 'DESC_Centro',
				'placeholder' => 'Descripción del centro',
				'value' => $centro->result()[0]->DESC_Centro,
				'maxlength' => 20,
				'size' => 20
			);

			/*--------------------FIN ARRAY DE LA DESCRIPCIÓN DEL CENTRO-------------------*/
		?>

		<?php echo form_open('Centro/guardar_cambios_centro/'.$centro->result()[0]->ID_Centro,$formularioCentro);?>
		
		<div class='divselect'>
		<?php echo form_label('Código del centro: ','COD_Centro'); ?>
		<?php echo form_input($COD_Centro); ?>
		</div>

		<div class='divselect'>
		<?php echo form_label('Descripción del centro: ','DESC_Centro'); ?>
		<?php echo form_input($DESC_Centro); ?>
		</div>
		</div>
	
		<?php echo "<div class='divbotones'>" ?>
		<?php echo form_submit('Editar','Editar'); ?>
		<button id="botonVolver" class="boton">Volver</button>
		<?php echo "</div>" ?>
		<?php echo form_close();?>

	</div>

	<!--------------------FIN SECCIÓN FORMULARIO-------------------->



</div>




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