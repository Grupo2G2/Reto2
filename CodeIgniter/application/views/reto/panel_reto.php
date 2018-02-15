<?php
$form = array(
	'name' => 'form_reto'
	);
?>

<div>
	<?php echo form_open('Reto/nuevo',$form);?>	
	<?php echo form_submit('aniadir','Añadir'); ?>
	<?php echo form_close();?>
</div>

<div>
	<?php echo form_open('Reto/nuevo_reto',$form);?>	
	<?php echo form_submit('asignar','Asignar Modulos/Equipos'); ?>
	<?php echo form_close();?>
</div>