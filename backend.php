<link rel="stylesheet" href="./css/decodificador.css">

<script src="./js/general.js"></script>

<?php

session_start();
require 'validarsesion.php'; 	


?>

<htlm>

<div id="top">

	<b>Seccion administracion</b>
	<br>


</div>


<div id="header">


<div id= "decodificador">
		      <a href="tpropiedades.php"><input type="submit" value="Administrar Tipos de Propiedad"></a>
		      <a href="caracteristicas.php"><input type="submit" value="Administrar Caracteristicas"> </a>
		      <a href="Apropiedades.php"><input type="submit" value="Administrar Propiedades"></a>
</div>

<div id="login">

	<input type="button" onclick="logout();" value="LogOut">

</div>

</div>



</htlm>
