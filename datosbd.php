<?php

	include("conectar.php");


	$prop = mysqli_query($con,"SELECT * FROM propiedades");
	$tipo = mysqli_query($con,"SELECT * FROM tipospropiedades");
	$caracteristicas = mysqli_query($con, "SELECT * FROM caracteristicaspropiedades");
	$caracteristicasprop = mysqli_query($con, "SELECT * FROM caracteristicaspropiedades_propiedades");

	include('tabla-p1.php');

	while($row = mysqli_fetch_array($prop)) {

		$id = $row["idtipopropiedad"];
		$resultado = mysqli_query($con, "SELECT tipopropiedad FROM tipospropiedades WHERE idtipopropiedad = $id");
		$row2 = mysqli_fetch_array($resultado);

		include('tabla-p2.php');

	}
	echo "</table>";

	mysqli_close($con);

?>

