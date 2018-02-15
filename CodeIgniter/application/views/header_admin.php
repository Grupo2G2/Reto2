<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Administrador</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/estilo.css" media="only screen and (min-width: 768px)" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/tablet.css" media="only screen and (min-width: 600px) and (max-width:767px)" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/movil.css" media="only screen and (max-width: 599px)" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<header>

<nav>
	<ul id="listaheader">
	<a id="logo" href=""><li> Logo </li></a>
	<li id="vacio"> </li>
	<a href=""><li> Cursos </li></a>
	<a href=""><li> Ciclos </li></a>
	<a href=""><li> Modulos </li></a>
	<a href=""><li> Retos </li></a>
	<a href=""><li> Equipos </li></a>
	<a href=""><li> Usuarios </li></a>
	</ul>
	<h1>Hola
	<?php foreach ($usuario->result() as $usu) {echo $usu->User; 	} ?>  
	</h1>
	<img id="btncerrar" src="<?php echo base_url(); ?>/imagenes/btnapagar.png">

	 <input type="hidden" value="<?php echo ($centroUsuario->result()[0]->ID_Centro); ?>" id="select_centro">
</nav>
<script>
	$(document).ready(function(){

		document.getElementById("btncerrar").addEventListener("click",function(){
	
			url = "<?php echo base_url() ?>"; 
			location.href=url;
		
		});

	});
</script>
	

</header>