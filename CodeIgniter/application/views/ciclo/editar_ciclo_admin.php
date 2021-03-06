<div>
	


	<!--------------------SECCIÓN FORMULARIO-------------------->
	
	<div id="seccionFormulario">
		<div class='divfiltro'>
		<h1>EDITAR CICLO</h1>	
		<?php
    		/*--------------------ARRAY DEL FORMULARIO-------------------*/

			$formularioCiclo = array(
				'name' => 'formularioCiclo'
			);

			/*--------------------FIN ARRAY DEL FORMULARIO-------------------*/


			/*---------------------------------------------------*/


			/*--------------------ARRAY DEL CÓDIGO DEL CICLO-------------------*/

			$COD_Ciclo = array(
				'name' => 'COD_Ciclo',
				'placeholder' => 'Código del ciclo',
				'value' => $ciclo->result()[0]->COD_Ciclo,
				'maxlength' => 10,
				'size' => 20
			);

			/*--------------------FIN ARRAY DEL CÓDIGO DEL CICLO-------------------*/


			/*---------------------------------------------------*/


			/*--------------------ARRAY DE LA DESCRIPCIÓN DEL CICLO-------------------*/

			$DESC_Ciclo = array(
				'name' => 'DESC_Ciclo',
				'placeholder' => 'Descripción del ciclo',
				'value' => $ciclo->result()[0]->DESC_Ciclo,
				'maxlength' => 30,
				'size' => 20
			);

			/*--------------------FIN ARRAY DE LA DESCRIPCIÓN DEL CICLO-------------------*/
		?>

		<?php echo form_open('Ciclo/guardar_cambios_ciclo_admin/'.$ciclo->result()[0]->ID_Ciclo,$formularioCiclo);?>


		<div class='divselect'>
		<?php echo form_label('Código del ciclo: ','COD_Ciclo'); ?>
		<?php echo form_input($COD_Ciclo); ?>
		</div>

		<div class='divselect'>
		<?php echo form_label('Descripción del ciclo: ','DESC_Ciclo'); ?>
		<?php echo form_input($DESC_Ciclo); ?>
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



<!-------------------------------------------------------------------->


<!----------SCRIPT---------->


<script>
	

	/*----------AL CARGAR EL DOCUMENTO----------*/

	$(document).ready(function(){


		/*----------AL CLICAR EN EL BOTÓN VOLVER----------*/


		//CUANDO SE CLICA EN EL BOTÓN VOLVER.
		$("#botonVolver").click(function(){
    		
    		//VUELVE A LA PÁGINA PRINCIPAL DE CICLO.
    		window.location.href = "../Ciclo/ciclo_admin";
	    });

		/*----------FIN AL CLICAR EN EL BOTÓN VOLVER----------*/


	});

	/*----------FIN AL CARGAR EL DOCUMENTO----------*/

</script>


<!----------FIN SCRIPT---------->	