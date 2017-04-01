<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Dinox | Diseño y desarrollo de paginas web</title>
	<link rel="stylesheet" href="../css/materialize.min.css">
	<link rel="stylesheet" href="../css/ionicons.min.css">
	<link rel="stylesheet" href="../css/animate.css">
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>	
	<!-- Inicio Header -->
	<header class="web extended blue">
		<div class="nav-background">
	        <div class="ea k" style="background-image: url('../img/bg-web.png');"></div>
	     </div>
		<nav class="navbar-index transparent no-shadow">
		    <div class="container">
		        <div class="nav-wrapper slide">
		            <a href="#" data-activates="slide-out" class="right button-collapse">
		                <img src="../img/icon-menu.png" alt="">
		            </a>
		            <a class="brand-logo" href="../" title="Milenium">
		                <img src="../img/i-milenium-other.png" alt="">
		                <span>DINOX</span>
		            </a>
		            <div class="clearfix"></div>
		        </div>
		        <!-- Navegacion  -->
		        <ul id="slide-out" class="side-nav green">
		            <li class="no-border">
		                <div class="userView">
		                    <div class="background blue"></div>
		                    <img src="../img/i-milenium.png">
		                    <a href="#!name"><span class="name"><b>DINOX</b></span></a>
		                    <a href="#!email"><span class="email">Soluciones Tecnologicas</span></a>
		                </div>
		            </li>
		            <li><a class="waves-effect white-text" href="#!"><i class="ion-information"></i>Nosotros</a></li>
		            <li><a class="waves-effect white-text" href="../#servicios"><i class="ion-gear-a"></i>Servicios</a></li>
		            <li><a class="waves-effect white-text" href="#!"><i class="ion-person-stalker"></i>Concertar Reunión</a></li>
		            <li><a class="waves-effect white-text" href="#!"><i class="ion-ios-compose-outline"></i>Suscribirse</a></li>
		            <li><a class="waves-effect white-text" href="#!"><i class="ion-ios-paperplane-outline"></i>Contacto</a></li>
		            <li><a class="waves-effect white-text" href="#!"><i class="ion-bookmark"></i>Preguntas Frecuentes</a></li>
		        </ul>
		    </div>
		</nav>
		<div class="nav-wrapper db">
			<div class="nav-header center">
	          	<h1 class="white-text">WEB</h1>
	          	<div class="ge">Diseño y Desarrollo web</div>
	        </div>
		</div>
		<div class="categories-wrapper blue darken-1 hide">
	        <div class="categories-container pin-top" style="/* top: 0px; */">
		          <ul class="categories db">
		            	<li class="k"><a href="#all">All</a></li>
		            	<li><a href="#overhead">Overhead</a></li>
		            	<li><a href="#sintel">Sintel</a></li>
		          </ul>
	        </div>
        </div>
        <div class="fixed-action-btn horizontal" style="position: absolute;bottom: -27px;right: 60px;">
		    <a class="btn-floating btn-large waves-effect waves-light red">
		      <i class="ion-ios-more"></i>
		    </a>
		    <ul>
		      <li><a href="../#reunion" class="btn-floating red tooltipped" data-position="top" data-delay="50" data-tooltip="Reunion""><i class="ion-ios-people"></i></a></li>
		      <li><a href="../#contacto" class="btn-floating red tooltipped" data-position="top" data-delay="50" data-tooltip="Contacto""><i class="ion-email-unread"></i></a></li>
		    </ul>
	    </div>
	</header>
	<main style="background-color: #EEE;">
		<div class="container">
			<div class="wrapper-service">
				<div class="c-top">
					<h3 class="center">Diseño y Desarrollo de Paginas Web</h3>
					<img src="../img/ser-web-pag.jpg" alt="Diseño y Desarrollo de Sitios Web" class="responsive-img">
					<p class="lead margin-bottom-40">Contamos con años de experiencia en el desarrollo y entendemos la importancia de un sitio web para su empresa o negocio, es por ello que brindamos soluciones integrales que se ajusten a lo que desea, ademas le garantizamos el acompañamiento a lo largo del desarrollo así como después de entregado el proyecto.</p>
				</div>
				<p>Tenemos un mundo de posibilidades para ti, para ello contamos con:</p><br>
				<p><b>Diseño de sitios corporativos</b></p>
				<p>- Diseñamos y llevamos a cabo proyectos para su empresa al detalle de sus necesidades, con identidades corporativas, colores, logos etc.</p>
				<p>- Nuestros diseños son adaptables, por lo tanto obtienes un solo diseño para ser visualizado en cualquier dispositivo.</p>
				<br>
				<p><b>Herramientas de comunicación</b></p>
				<p>- Formularios personalizados que le permitan interactuar con sus clientes y obtener la informacion directamente en su bandeja de correo electronico</p>
				<p>- Seccion de noticias</p><br>
				<p><b>Soporte y Administracion del sitio</b></p>
				<p>- Se realizan tutorias, capacitaciones, manuales, videos relacionado con el manejo de la página</p>
				<p>- Cuenta con acompañamiento cuando lo requiera</p>
				<p>- Puede administrar directamente la informacion que requiera.</p>
				<br><br>
				<p class="lead" style="text-align: center;"><b>Si deseas un asesoramiento para iniciar tu proyecto o quieres saber mas sobre algo en particular no dudes en contactarnos, recuerda que trabajamos para usted</b></p>
			</div>
			<div class="center padin-bottom-40">
				<a href="../contacto/" class="btn btn-large  waves-effect waves-light blue">iniciar proyecto</a>
			</div>
		</div>
	</main>
	<!-- Footer -->
	<?php include 'inc/footer.php'; ?>
	<!-- /Footer -->
	<!-- Inicio de Scripts -->
	<script src="../js/jquery-2.1.3.min.js"></script>
	<script src="../js/materialize.min.js"></script>
	<script>$(".button-collapse").sideNav();</script>
	<script>$(document).ready(function(){$('.tooltipped').tooltip();});</script>
</body>
</html>
