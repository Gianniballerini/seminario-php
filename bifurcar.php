<?php 
if (isset($numero)) {
	if ($numero==1) {
		echo '	<form name="filtro2" action="propiedades.php?filtro=1" method="post">
					<input type="checkbox" name="cochera" value="1">Cochera<br>
					<input type="checkbox" name="pileta" value="1">Pileta<br> 
					<input type="checkbox" name="parrilla" value="1">Parrila<br>
					<input type="submit" value="Filtrar" name="filtro3">
				</form>
			';
	}else{
		if ($numero==2) {
			echo 	'	<form name="filtro2" action="propiedades.php?filtro=2" method="post">
							<input type="checkbox" name="cochera" value="1">Cochera<br>
							<input type="checkbox" name="pileta" value="1">Pileta<br> 
							<input type="checkbox" name="parrilla" value="1">Parrila<br>
							<input type="submit" value="Filtrar" name="filtro3">
						</form>
					';
		}else{ //alguien toco el numero manualmente
			echo 	'	<form name="filtro2" action="propiedades.php" method="post">
							<input type="checkbox" name="cochera" value="1">Cochera<br>
							<input type="checkbox" name="pileta" value="1">Pileta<br> 
							<input type="checkbox" name="parrilla" value="1">Parrila<br>	
							<input type="submit" value="Filtrar" name="filtro3">
						</form>
					';
		}
	} 

}else{
	echo 	'	<form name="filtro2" action="propiedades.php" method="post">
					<input type="checkbox" name="cochera" value="1">Cochera<br>
					<input type="checkbox" name="pileta" value="1">Pileta<br> 
					<input type="checkbox" name="parrilla" value="1">Parrila<br>
					<input type="submit" value="Filtrar" name="filtro3">
				</form>
			';
}

?>