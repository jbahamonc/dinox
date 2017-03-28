<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Semantic's | Mantenimiento de computadores, analisis de daños en el computador, antivirus, instlacion de software etc.</title>
	<meta name="description" content="Mantenimiento especializado de computadores en la cuidad de cucuta">
	<link rel="stylesheet" href="css/materialize.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<header class="navbar-fixed">
		<nav class="light-green" role="navigation">
			<div class=" nav-wrapper container">
				<a href="index.html" class="brand-logo"><h1 class="no-margin"><img src="img/logo.png" alt=""></h1></a>			
				<ul class="right hide-on-med-and-down blue-text">
		            <li><a href="acerca.html">SemanTIC'S</a></li>
		            <li>
		            	<a href="#!" class="dropdown-button" data-activates="dropdown1">Servicios<i class="fa fa-angle-down fa-lg right"></i></a>
		            	<ul id="dropdown1" class="dropdown-content">
						    <li><a href="web.html">Web</a></li>
						    <li><a href="software.html">Software</a></li>
						    <li><a href="pc.html">PC'S</a></li>
						    <li><a href="redes.html">Redes</a></li>
						    <li><a href="seguridad.html">Camaras</a></li>
						</ul>
					</li>
		            <li><a href="tienda.php">Tienda Online</a></li>
		            <li><a href="contacto.html">Contacto</a></li>
		        </ul>
		        <ul class="side-nav" id="mobile-demo">
			        <li><a class="blue-text" href="acerca.html">SemanTIC'S</a></li>
		            <li><a class="blue-text" href="servicios.html">Servicios</a></li>
		            <li><a class="blue-text" href="tienda.html">Tienda Online</a></li>
		            <li><a class="blue-text" href="contacto.html">Contacto</a></li>
				</ul>
				<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
	  		</div>
		</nav>	
	</header>
	<main>
		<div class="parallax-container">
			<div class="section">
				<div class="container">
					<h2 class="white-text"><strong>Bienvenidos a nuestra tienda online</strong></h2>
					<div class="row">
						<h5 class="white-text"><i>Todo lo que buscas a un solo click</i></h5>
					</div>
				</div>
			</div>
			<div class="parallax">
				<img src="img/fondo-tienda-online.jpg" alt="" style="display: block;">
			</div>
		</div>
		<div class="white section-long">
			<div class="container">
				<div class="row">
					<h4 class="center">Encuentra lo que buscas</h4>
					<p class="center margin-bottom-40">Ej: Lenovo, Mouse, Camaras Web</p>
					<nav>
						<div class="nav-wrapper">
					        <div class="input-field">
					            <input class="search" type="search">
					            <label for="search"><i class="fa fa-search"></i></label>
					        </div>						 
						</div>
					</nav>
				</div>
				<div class="row margin-top-40">
					<div class="col l3">
						<ul class="collection with-header">
					        <li class="collection-header"><h5 class="center"><b>Categorias</b></h5></li>
					        <li class="collection-item"><div><a class="s_cat pointer" data-categoria="Portatil" ><i class="fa fa-desktop"></i> Portatiles</a></div></li>
					        <li class="collection-item"><div><a class="s_cat pointer" data-categoria="Desktop" ><i class="fa fa-desktop"></i> Comp. de mesa</a></div></li>
					        <li class="collection-item"><div><a class="s_cat pointer" data-categoria="Camaras" ><i class="fa fa-video-camera"></i> Camaras de Seguridad</a></div></li>
					        <li class="collection-item"><div><a class="s_cat pointer" data-categoria="Impresora" ><i class="fa fa-print"></i> Impresoras</a></div></li>
					        <li class="collection-item"><div><a class="s_cat pointer" data-categoria="Tablet" ><i class="fa fa-tablet"></i> Tablet</a></div></li>
					        <li class="collection-item"><div><a class="s_cat pointer" data-categoria="Hardware" ><i class="fa fa-hdd-o"></i> Hardware</a></div></li>
					    </ul>
					    <div class="blue">
					    	politicas de la tienda <br>Abrir en ventana modal
					    </div>
					    <div class="light-green margin-top-10">
					    	Compartir con redes sociales <br>Abrir en ventana modal
					    </div>
					</div>
					<div class="col l9">
						<div class="row contenido-articulos">
							<?php
								include("php/mostrar_all.php")																										
							?>						
						</div>						
					</div>
				</div>
			</div>			
		</div>
	</main>
	<footer class="page-footer light-green white-text footer">
		<div class="container">
			<div class="row">
				<div class="col l4">
					<h4 class="white-text">FOOTER TITLE</h4>
					<p class="white-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem fugiat commodi totam sint illo incidunt quis eius, eum, iure, voluptatibus fugit, voluptas atque ratione nobis sed omnis! Aliquam sequi, nisi.</p>
				</div>
			</div>
		</div>
		<div class="footer-copyright">
            <div class="container">
            © 2015 Copyright SemanTICS
            </div>
        </div>
	</footer>
	<!-- Modal Structure -->
    <div id="modal1" class="modal">
        <div class="modal-content">
        	<a href="#!" class="modal-close icon-close grey-text"><i class="fa fa-close small"></i></a>
            <h4>Detalles del Articulo</h4>
            <hr class="hr">
            <div class="row margin-top-40 contenido-articulos" id="contenido-articulo">
	            <!-- Datos ingresados dianmicamente -->
            </div>	
        </div>
    </div>
    <!-- Boton Ver Carrito Compras -->
    <div class="car-fixed blue">
        <span class="cart left">
      		<a class="white-text" href="php/carrito.php" title="Ver carrito"><i class="fa fa-shopping-cart fa-lg"></i></a>
        </span>
        <div class="right item">
        	<?php 
        		$i = 0;
        		$total = 0;
        		if (isset($_SESSION['carrito'])) {
        			$lista = $_SESSION["carrito"];
        			while ($i < count($lista)) {
        				$total += ($lista[$i]['cantProd'] * $lista[$i]['preProd']);
        				$i++;
        			}
        		}
        		
        		echo "<b>".$i." Item(s) - $".$total."</b>";
        	?>
        </div>
    </div>
	<script src="js/jquery-2.1.3.min.js"></script>
	<script src="js/materialize.min.js"></script>
	<script src="js/main.js"></script>
	<script>$(document).ready(function(){ $(".button-collapse").sideNav();});</script>
	<script>$(document).ready(function(){$(".dropdown-button").dropdown();});</script>
	<script>$(document).ready(function(){$('.parallax').parallax();});</script>
	
</body>
</html>