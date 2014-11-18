<?php
  session_start();
  require 'validarsesion.php';

?>


<script src="./js/general.js"></script> <!-- esto me deja usar todas las funciones dentro de general.js  -->
<link href="./css/estilo.css" rel="stylesheet">

<htlm>
<div class="general">

	<div class="arribaAlMedio">
		<h1>Administracion Tipo de Propiedades</h1>
	</div>

	<div class="opacidad">
		<input type="button" onclick="location.href='./Altacat.php'" value="NUEVA CATEGORIA"/> 	
	</div>

	<div class="centro">
	
		<?php
			require 'conectar.php';


			$registros=mysqli_query($con, "SELECT * FROM tipospropiedades") or die("Problemas en el select:".mysqli_error($con));


			while ($reg=mysqli_fetch_array($registros)){


				echo '<div class="blanco">';
				echo "Tipo de propiedad: " .$reg['tipopropiedad']."<br>";
				echo '<input type="button" onclick="location.href=\'ModTipro.php?id='.$reg['idtipopropiedad'].'\'" value="Modificar">'; 
				echo '<input type="button" onclick="decicion(\'bajatipo.php?id='.$reg['idtipopropiedad'].'\')" value="Eliminar">';
				echo "<hr>";
				echo "</div>";
			}
			mysqli_close($con);
		?>
	</div>

	<input type="button" value="volver" onclick = "location='backend.php'"/>	
</div>
</htlm>
