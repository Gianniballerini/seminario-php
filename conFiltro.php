<?php


	include("conectar.php");

	include("busqueda.php");
 
	include("tabla-p1.php"); //primer parte de la tabla (se repite mucho por eso esta en un archivo aparte para usarlo)

	if (isset($_GET['filtro'])) {
		if ($_GET['filtro'] == 1) {
			while($row = mysqli_fetch_array($prop)) {
				if ($row['estado'] == 'alquiler') {
					$id = $row["idtipopropiedad"];
					$resultado = mysqli_query($con, "SELECT tipopropiedad FROM tipospropiedades WHERE idtipopropiedad = $id");
					$row2 = mysqli_fetch_array($resultado);

					include("tabla-p2.php"); //segunda parte de la tabla (idem con la primer parte)
				}
			}

		}elseif ($_GET['filtro'] == 2) {
			while($row = mysqli_fetch_array($prop)) {
				if ($row['estado'] == 'venta') {
					$id = $row["idtipopropiedad"];
					$resultado = mysqli_query($con, "SELECT tipopropiedad FROM tipospropiedades WHERE idtipopropiedad = $id");
					$row2 = mysqli_fetch_array($resultado);

					include("tabla-p2.php"); //segunda parte de la tabla (idem con la primer parte)
				}
			}
		}
	}else{
		while($row = mysqli_fetch_array($prop)) {
			$id = $row["idtipopropiedad"];
			$resultado = mysqli_query($con, "SELECT tipopropiedad FROM tipospropiedades WHERE idtipopropiedad = $id");
			$row2 = mysqli_fetch_array($resultado);

			include("tabla-p2.php"); //segunda parte de la tabla (idem con la primer parte)

		}
	}
	echo "</table>";

	mysqli_close($con);

?>
