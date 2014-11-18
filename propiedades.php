<?php


?>

<html>
		<link rel="stylesheet" type="text/css" href="css/main.css">
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
								<a class="active" href="propiedades.php">Proiedades</a>
							</li>
							<li>
								<a href="quien.php"> Quienes somos</a>
							</li>
							<li>
								<a href="comollegar.php"> Como Llegar</a>
							</li>
							<li>
								<a href="contacto.php"> Contacto</a>
							</li>
						</ul>
					</nav>
					<form id="formularioIdentificarse" action="./identificarse.php" method="post">
	          <input name="usuario" id="usuario" placeholder="usuario" type="text">
	          <input name="clave" id="clave" placeholder="Clave" type="password">
	          <input type="submit" value="Submit">
	</form>

				</div>
			</div>

			<div id="subMenu">
				
				<nav id="subMenu-inner">

					<?
					if (isset($_GET['filtro'])){

						if ($_GET['filtro']==1) {
								echo '
										<ul id="subMenu-inner-ul">
											<li>
												<a href="propiedades.php"> Todas las propiedades</a>
											</li>
											<li>
												<a class="active" href="propiedades.php?filtro=1"> en Alquiler</a>
											</li>
											<li>
												<a href="propiedades.php?filtro=2">en Venta</a>
											</li>
											
										</ul>
										';
						}else{
							if ($_GET['filtro']==2) {
								echo '
										<ul id="subMenu-inner-ul">
											<li>
												<a href="propiedades.php"> Todas las propiedades</a>
											</li>
											<li>
												<a href="propiedades.php?filtro=1"> en Alquiler</a>
											</li>
											<li>
												<a class="active" href="propiedades.php?filtro=2">en Venta</a>
											</li>
											
										</ul>
										';
							}else{
									echo '
										<ul id="subMenu-inner-ul">
											<li>
												<a class="active" href="propiedades.php"> Todas las propiedades</a>
											</li>
											<li>
												<a href="propiedades.php?filtro=1"> en Alquiler</a>
											</li>
											<li>
												<a href="propiedades.php?filtro=2">en Venta</a>
											</li>
											
										</ul>
										';
							}
						}

					}else{

					echo '
						<ul id="subMenu-inner-ul">
							<li>
								<a class="active" href="propiedades.php"> Todas las propiedades</a>
							</li>
							<li>
								<a href="propiedades.php?filtro=1"> en Alquiler</a>
							</li>
							<li>
								<a href="propiedades.php?filtro=2">en Venta</a>
							</li>
							
						</ul>
						';


					}	
				?>

						
					</nav>

			</div>
		</header>

		<section>
		
		<div id="body" >
			<div class="nv">

				<div id="filtro">
					<div id="tit">
						Filtar contenido:
					</div>
					<div id="centrar">
						<?php 
						include('checkboxes.php');
						?>
					</div>
				</div>

				<div id="contenido">

				<?
						include("conFiltro.php");
				?>

				</div>
			</div>
		</div>
		</section>

		<div id="footer">
			Inmobiliaria W-G Seminario de PHP
		</div>



	</html>
