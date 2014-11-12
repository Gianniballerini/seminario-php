<?php

?>

<html>
		<link rel="stylesheet" type="text/css" href=".././css/main.css">
		<script src="https://maps.googleapis.com/maps/api/js"></script>
		<script>
	      function initialize() {
	        var mapCanvas = document.getElementById('map_canvas');
	        var mapOptions = {
	          center: new google.maps.LatLng(-34.903251, -57.937868), 
	          zoom: 17,
	          mapTypeId: google.maps.MapTypeId.ROADMAP
	        }
	        var map = new google.maps.Map(mapCanvas, mapOptions)
	      }
	      google.maps.event.addDomListener(window, 'load', initialize);
		</script>
		<header>
			<div class="nv">
				<div class="menu">
					<div id="nombre">
						INMOBILIARIA <br/ >
						W-G
					</div>
					<nav id="menuPrincipal">
						<ul id="menuPrincipal-inner">
							<li>
								<a  href="propiedades.php">Proiedades</a>
							</li>
							<li>
								<a href="quien.php"> Quienes somos</a>
							</li>
							<li>
								<a class="active" href="comollegar.php"> Como Llegar</a>
							</li>
							<li>
								<a href="contacto.php"> Contacto</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</header>

		<section>
		
		<div id="body" >
			<div class="nv">
				<div id="map_canvas"></div>	
				<div id="como">
					Nuestas oficinas se encuentran en 50 y 120.
				</div>		
			</div>
		</div>
		</section>

		<div id="footer">
			Inmobiliaria W-G Seminario de PHP
		</div>

	</html>