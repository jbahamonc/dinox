<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SemanTIC'S | Sevicios Informaticos</title>
	<link rel="stylesheet" href="css/materialize.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/style.css">	
</head>
<body onload="initialize()">
	<div class="navbar-fixed">
		<nav class="blue lighten-1" role="navigation">
			<div class=" nav-wrapper container">
				<a href="index.html" class="brand-logo"><h1 class="no-margin"><img src="img/logo.png" alt=""></h1></a>			
				<ul class="right hide-on-med-and-down blue-text">
		            <li><a href="acerca.html">SemanTIC'S</a></li>
		            <li>
		            	<a href="#!" class="dropdown-button" data-activates="dropdown1">Servicios<i class="mdi-navigation-arrow-drop-down right"></i></a>
		            	<ul id="dropdown1" class="dropdown-content">
						    <li><a href="web.html">Web</a></li>
						    <li><a href="software.html">Software</a></li>
						    <li><a href="pc.html">PC'S</a></li>
						    <li><a href="redes.html">Redes</a></li>
						    <li><a href="seguridad.html">Camaras</a></li>
						</ul>
					</li>
		            <li><a href="tienda.html">Tienda Online</a></li>
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
	</div>
	<main>
		<div class="white">
			<div class="container">
				<div class="section-long center">
					<h4 class="grey-text text-darken-3">¿Como llegar?</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit sequi nulla quo, aut dignissimos iste sapiente provident dolorum excepturi! Velit provident fugit ipsam illo sapiente facilis soluta, iste quos ullam.</p>
				</div>
			</div>
		</div>
		<div class="white mapa-contacto">
			<div class="container">
				<div class="row no-margin">
					<div class="section">
						<div class="col l6">
							<div class="gmap valign-wrapper">
								<div id="map_canvas" style="width:400px; height:380px"></div>
							</div>
						</div>
						<div class="col l6">
							<br><br>
							<div class="content-info white margin-top-40">
								<h5 class="titulo-contacto"><span><strong>Información</strong></span></h5>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem recusandae officiis assumenda quisquam laudantium, sequi at. Eum enim hic sit, asperiores atque, iste quaerat quos mollitia aspernatur voluptas, molestiae earum.</p>
								<ul class="margin-top-10">
									<li><i class="mdi-action-room red-text"></i><strong> Dirección: </strong>Calle 13 #0-31, Cúcuta, Colombia</li>
									<li><i class="mdi-communication-email red-text"></i><strong> Email: </strong>contacto@semantics.tk</li>
									<li><i class="mdi-communication-call red-text"></i><strong> Telefono: </strong>+57 312 527 1579</li>
								</ul>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="red lighten-2">
			<div class="container">
				<div class="section-long">					
					<div class="row center">
						<h4 class="white-text">Escribenos Algo</h4>
						<p class="white-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, et sapiente at iste eius veritatis, rerum deleniti, magnam nam labore cupiditate ex officiis doloremque dolorum dolore. Dolore inventore earum cum.</p>
					</div>
					<div class="row padin-top-40">
						<div class="col l6">
							<form class="col s12 contacto">
							      <div class="row">
							        <div class="input-field col s12">
							          <input id="first_name" type="text" class="validate">
							          <label for="first_name">Nombre Completo</label>
							        </div>
							      </div>
						        <div class="row">
							        <div class="input-field col s12">
							          <input id="email" type="email" class="validate">
							          <label for="email">Email</label>
							        </div>
						        </div>
						        <div class="row">
							        <div class="input-field col s12">
							            <textarea id="textarea1" class="materialize-textarea"></textarea>
							            <label for="textarea1">Mensaje</label>
							        </div>
							    </div>
							    <div class="row">
							    	<input type="submit" name="enviar" value="Enviar Mensaje" class="btn red lighten-3">
							    </div>
						    </form>
						</div>
						<div class="col l6 center">
							<img src="img/contacto.png" alt="" class="responsive-img">
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
	<footer class="page-footer blue lighten-1 white-text footer">
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
            © 2015 Copyright SemanTIC'S
            </div>
        </div>
	</footer>
	<script src="js/jquery-2.1.3.min.js"></script>
	<script src="js/materialize.min.js"></script>
	<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script>$(document).ready(function(){ $(".button-collapse").sideNav();});</script>
	<script>$(document).ready(function(){$(".dropdown-button").dropdown();});</script>
	<script>$(document).ready(function(){$('.parallax').parallax();});</script>
	<script>
			function initialize() {
				var latlng = new google.maps.LatLng(7.918869, -72.520155);
				var styles = [
					{"featureType": "landscape","stylers": [{"hue": "#00B5FF"},{"saturation": -70.4},{"lightness": 21.599999999999994},{"gamma": 1}]},
					{"featureType": "road.highway","stylers": [{"hue": "#53FF00"},{"saturation": 0},{"lightness": -1.4210854715202004e-14},{"gamma": 1}]},
					{"featureType": "road.arterial","stylers": [{"hue": "#FBFF00"},{"saturation": 0},{"lightness": 0},{"gamma": 1}]},
					{"featureType": "road.local","stylers": [{"hue": "#00FFFD"},{"saturation": 0},{"lightness": 0},{"gamma": 1}]},
					{"featureType": "water","stylers": [{"hue": "#0078FF"},{"saturation": 0},{"lightness": 0},{"gamma": 1}]},
					{"featureType": "poi","stylers": [{"hue": "#9FFF00"},{"saturation": 0},{"lightness": 0},{"gamma": 1}]}
				];
				var settings = {
					zoom: 16,
					center: latlng,
					panControl: false,
					zoomControl: false,
    				scaleControl: true,
					mapTypeId: google.maps.MapTypeId.ROAD,
					styles: styles};

				var map = new google.maps.Map(document.getElementById("map_canvas"), settings);
				var contentString = '<div class="">'+
					'<h6 class="blue-text center">SemanTIC´S</h6>'+
					'<p class="">Servicios Informaticos<br>PBX: (+57) 312 527 1579<br>E-mail: contacto@semantics.tk</small></p>'+
					'</div>';
				var infowindow = new google.maps.InfoWindow({
					content: contentString
				});
				
				var companyImage = new google.maps.MarkerImage('img/pin2.png',
					new google.maps.Size(56,57),
					new google.maps.Point(0,0),
					new google.maps.Point(25,50)
				);

				var companyPos = new google.maps.LatLng(7.918869, -72.520155);

				var companyMarker = new google.maps.Marker({
					position: companyPos,
					map: map,
					icon: companyImage,
					title:"SemanTIC´S",
					zIndex: 3});
				
				google.maps.event.addListener(companyMarker, 'click', function() {
					infowindow.open(map,companyMarker);
				});
			}
	</script>	
</body>	
</html>