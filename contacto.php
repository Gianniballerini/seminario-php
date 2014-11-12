
<?php

?>

<html>
		<link rel="stylesheet" type="text/css" href=".././css/main.css">
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
								<a href="propiedades.php">Proiedades</a>
							</li>
							<li>
								<a href="quien.php"> Quienes somos</a>
							</li>
							<li>
								<a href="comollegar.php"> Como Llegar</a>
							</li>
							<li>
								<a class="active" href="contacto.php"> Contacto</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</header>

		<section>
		
		<div id="body" >
			<div class="nv">
				<div id="contacto"> 
					FORMULARIO DE CONTACTO 
				</div>
				<div id="formulario">
					<form name="formularioContacto" method="post" action="send.php">
					Mail <br/>
					<input	type="email" name="mail" placeholder="example@gmail.com" size="42" required autofocus> <br/>
					Consulta <br/> 
					<textarea name="datos" maxlength="500" cols="30" rows="5" required></textarea> <br/>
					<input type="submit" value="ACEPTAR">
					</form>
				</div>
			</div>
		</div>
		</section>

		<div id="footer">
			Inmobiliaria W-G Seminario de PHP
		</div>

	</html>