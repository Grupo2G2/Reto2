<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php
$form = array(
	'name' => 'form_login'
);
$User = array(
	'id' => 'userlogin',
	'name' => 'User',
	'placeholder' => 'Usuario',
	'maxlength' => 15,
	'size' => 20
);
$Password = array(
	'id' => 'passlogin',
	'name' => 'Password',
	'type' => 'password',
	'placeholder' => 'Contraseña',
	'maxlength' => 50,
	'size' => 20
);
$Conectar = array(
	'id' => 'Conectar',
	'name' => 'Conectar',
	'value' => 'Conectar',
	'type' => 'submit',
	'disabled' => 'true'
);
?>
<style type="text/css" media="screen">
	body{
		background-color: #D7EEF2;
	}
	.titulo{
		width: 400px;
		margin: 0 auto;
		text-align: center;
		margin-top: 5%;
	}
	.inititulo{
		color: #35404F;
	}
	.login{
		width: 400px;
		margin: 0 auto;
		margin-top: 10%;
		background-color: #35404F;
		padding: 1.5em;
		border: 4px solid;
		border-color: #94D9E4;
	}
	.login label{
		color: #D7EEF2;
	}
	.loginusuario{
		margin-top: 8px;
	}
	#userlogin{
		margin-left: 50px;
	}
	#passlogin{
		margin-left: 20px;
	}
	.logincontraseña{
		margin-top: 15px;
	}
	#Conectar{
		margin-top: 20px;
		margin-left: 40%;
	}
</style>
<div class="titulo">
	<h1 class="inititulo">Iniciar Sesión</h1>
</div>
<div class="login">
	<?php echo form_open(base_url().'index.php/Welcome/conexion_usuario/',$form);?>
		<div class="loginusuario">
			<?php echo form_label('Usuario: ','User'); ?>
			<?php echo form_input($User); ?>
		</div>
		<div class="logincontraseña">
			<?php echo form_label('Contraseña: ','Password'); ?>
			<?php echo form_input($Password); ?>
		</div>
		<?php echo form_submit($Conectar); ?>
	<?php echo form_close();?>
</div>
<script>
	$(document).ready(function(){
		$('#userlogin').change(function(){
			lgnbtn();
		});
		$('#passlogin').change(function(){
			lgnbtn();
		});
		function lgnbtn(){
			if($('#userlogin').val() == ""){
				document.getElementById('Conectar').setAttribute("disabled", true);
			}else if($('#passlogin').val() == ""){
				document.getElementById('Conectar').setAttribute("disabled", true);
			}else{
				document.getElementById('Conectar').removeAttribute("disabled");
			}
		}
	});
</script>