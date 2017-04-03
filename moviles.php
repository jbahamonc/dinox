<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Dinox | Diseño y desarrollo de Aplicaciones Moviles</title>
	<link rel="stylesheet" href="../css/materialize.min.css">
	<link rel="stylesheet" href="../css/ionicons.min.css">
	<link rel="stylesheet" href="../css/animate.css">
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>	
	<!-- Inicio Header -->
	<header class="web extended grey">
		<div class="nav-background">
	        <div class="ea k" style="background-image: url('../img/bg-web.png');"></div>
	     </div>
		<nav class="navbar-index transparent no-shadow">
		    <div class="container">
		        <div class="nav-wrapper slide">
		            <a href="#" data-activates="slide-out" class="right button-collapse">
		                <img src="../img/icon-menu.png" alt="">
		            </a>
		            <a class="brand-logo" href="../" title="Dinox">
		                <img src="../img/logo-dinox1.png" alt="">
		                <span>DINOX</span>
		            </a>
		            <div class="clearfix"></div>
		        </div>
		        <!-- Navegacion movil  -->
		        <ul id="slide-out" class="side-nav">
		            <li class="no-border">
		                <div class="userView">
		                    <div class="background blue"></div>
		                    <img src="../img/logo-dinox1.png">
		                    <p class="white-text"><span class="name"><b>Dinox</b></span></p>
		                    <p class="white-text"><span class="email">Soluciones Tecnológicas</span></p>
		                </div>
		            </li>
		            <li><a class="waves-effect white-text" href="#!"><i class="ion-information"></i>Nosotros</a></li>
		            <li><a class="waves-effect white-text" href="./#servicios"><i class="ion-gear-a"></i>Servicios</a></li>
		            <li><a class="waves-effect white-text" href="#!"><i class="ion-ios-compose-outline"></i>Suscribirse</a></li>
		            <li><a class="waves-effect white-text" href="./#contacto"><i class="ion-ios-paperplane-outline"></i>Contacto</a></li>
		            <li><a class="waves-effect white-text" href="#!"><i class="ion-bookmark"></i>Preguntas Frecuentes</a></li>
		        </ul>
		        <!-- /Navegacion movil  -->
		    </div>
		</nav>
		<div class="nav-wrapper db">
			<div class="nav-header center">
	          	<h1 class="white-text">APPS</h1>
	          	<div class="ge">Diseño y Desarrollo de Apps</div>
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
		      <li class="hide"><a href="../#reunion" class="btn-floating red tooltipped" data-position="top" data-delay="50" data-tooltip="Reunion""><i class="ion-ios-people"></i></a></li>
		      <li><a href="../#contacto" class="btn-floating red tooltipped" data-position="top" data-delay="50" data-tooltip="Contacto""><i class="ion-email-unread"></i></a></li>
		    </ul>
	    </div>
	</header>
	<main style="background-color: #EEE;">
		<div class="container">
			<div class="wrapper-service">
				<div class="c-top">
					<h3 class="center">Diseño y Desarrollo de Aplicaciones Móviles</h3>
					<img src="../img/desarrollo-movil.jpg" alt="Diseño y Desarrollo de Aplicaciones Móviles" class="responsive-img">
					<p class="lead margin-bottom-40">Desarrollamos aplicaciones para la empresa basada en tecnologías móviles, aplicaciones que brindan apoyo al funcionamiento y gestión de la organización, de manera ágil y segura.</p>
				</div>
				<p>Que tu negocio cuente con su propia Aplicación (App) será tu mayor ventaja competitiva. Si tener una página web era imprescindible, ahora las aplicaciones móviles (Apps) se suman a los requerimientos que demandan el mundo actual.</p><br>
				<p><b>Diseño de Aplicaciones</b></p>
				<p>Para que su aplicación móvil tenga el éxito que usted espera, Dinox le ofrece el acompañamiento que necesita con profesionales en múltiples áreas.</p>
				<p>- Empresariales.</p>
				<p>- Educación.</p>
				<p>- Productividad.</p>
				<p>- Comunicaciones.</p>
				<p>- Comercio Electronico</p>
				<br>
				<p><b>Diseño a la Medida y Personalizado</b></p>
				<p>En el proceso de crear una app, implementamos fases que enfoquen el desarrollo hacia lo que el cliente desea, es por eso que en Dinox queremos mantener un contacto permanente con el cliente, realizando ajustes con el fin que la aplicacion tenga un gran exito.</p>
				<p>- Planeacion.</p>
				<p>- Viabilidad.</p>
				<p>- Diseño.</p>
				<p>- Desarrollo.</p>
				<p>- Pruebas.</p>
				<br><br>
				<p class="lead" style="text-align: center;"><b>Si deseas un asesoramiento para iniciar tu proyecto o quieres saber mas sobre algo en particular no dudes en contactarnos, recuerda que trabajamos para usted</b></p>
			</div>
			<div class="center padin-bottom-40">
				<a href="../#contacto" class="btn btn-large  waves-effect waves-light grey">iniciar proyecto</a>
			</div>
		</div>
	</main>
	<!-- Footer -->
	<?php include 'footer.php'; ?>
	<!-- /Footer -->
	<!-- Inicio de Scripts -->
	<script src="../js/jquery-2.1.3.min.js"></script>
	<script src="../js/materialize.min.js"></script>
	<script>$(".button-collapse").sideNav();</script>
	<script>$(document).ready(function(){$('.tooltipped').tooltip();});</script>
</body>
</html>
