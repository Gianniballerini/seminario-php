<?php

 	$caracNombre = mysqli_query($con,"SELECT * FROM caracteristicaspropiedades");
 	$arreglo = array();
 	$arreglo2 = array();

 	while($row = mysqli_fetch_array($caracNombre)) {
 		if (isset($_POST[$row['caracteristica']])) {
 			$respuesta = mysqli_query($con,"SELECT * FROM caracteristicaspropiedades_propiedades WHERE idcaracteristica = '$row[idcaracteristica]'");
 			while ($row2 = mysqli_fetch_array($respuesta)) {
 				$arreglo[] = $row2['idpropiedad'];
 			}
 		} 
	}

	asort($arreglo);

	$valor = '-1';
	foreach ($arreglo as $value) {
		if ($value != $valor) {
			$arreglo2[] = $value;
			$valor = $value;
		}
	}

	//basicamente esto me va a estar dando un arreglo (arreglo2) con los id de las propiedades que tengan las caracteristicas marcadas en el form de propiedades.php

?>