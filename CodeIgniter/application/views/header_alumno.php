<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Alumno</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/estilo.css" media="only screen and (min-width: 768px)" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<header>
<nav>
	<ul id="listaheader">
	<li id="logo"> Logo </li>

	<li id="vacio"></li>
	<li id="vacio"></li>
	<li id="vacio"></li>
	<li id="vacio"></li>
	<li id="vacio"></li>
	<li id="vacio"></li>
	<li id="vacio"></li>
	<a href="<?php echo base_url()?>index.php/Rubrica"><li> Rubricas </li></a>
	</ul>
	<h1>Hola
	<?php foreach ($usuario->result() as $usu) {echo $usu->User; 	}
	        //echo('<h3 id="select_curso"> '.$centro->result()[0]->DESC_Centro.' </h3>');	 ?>  
	</h1>
	<img id="btncerrar" src="<?php echo base_url(); ?>/imagenes/btnapagar.png">

	  
	   <input type="hidden" value="<?php echo ($centro->result()[0]->DESC_Centro); ?>" id="select_centro">



</nav>

<script>
	$(document).ready(function(){

		document.getElementById("btncerrar").addEventListener("click",function(){
	
			url = "<?php echo base_url() ?>"; 
			location.href=url;
		
		});


			document.getElementById("logo").addEventListener("click",function(){
	
			url = "<?php echo base_url(); ?>index.php/Login/email"; 
			location.href=url;
		
		});

	});
</script>

	

</header>