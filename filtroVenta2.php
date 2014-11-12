<?php


	include("conectar.php");

	include("busqueda.php");

	include("tabla-p1.php"); //primer parte de la tabla (se repite mucho por eso esta en un archivo aparte para usarlo)


		while($row = mysqli_fetch_array($prop)) {
			if ($row['estado'] == 'venta') {
				$id = $row["idtipopropiedad"];
				$resultado = mysqli_query($con, "SELECT tipopropiedad FROM tipospropiedades WHERE idtipopropiedad = $id");
				$row2 = mysqli_fetch_array($resultado);

				include("tabla-p2.php"); //segunda parte de la tabla (idem con la primer parte)
			}

			

		/*	
			<img src='getimage.php?id=$row[idpropiedad]' width='175' height='200' />
			$idpropiedad = $row['idpropiedad'];
			$idtipopropiedad = $row['idtipopropiedad'];
			$calle = $row['calle'];
			$nro = $row['nro'];
			$piso = $row['piso'];
			$dpto = $row['dpto'];
			$estado = $row['estado'];
			$precio = $row['precio'];
			$zona = $row['zona'];
			$cantambientes = $row['cantambientes'];
			$cantbanos = $row['cantbanos'];
			$tipoFoto = $row['tipoFoto'];
			$observaciones = $row['observaciones'];

		  echo $row['idpropiedad'] . " " . $row['idtipopropiedad'] . " " . $row['calle'] . " " . $row['nro'] . " " . $row['piso'] . " " . $row['dpto'] . " " . $row['estado'] . " " . $row['precio'] . " " . $row['zona'] . " " . $row['cantambientes'] . " " . $row['cantbanos'] . " " . $row['tipoFoto'] . " " . $row['observaciones'];
		  echo "<br>"; */
		}
	//}
	echo "</table>";

	if (isset($cochera)) {
		echo $cochera;
		echo $pileta;
		echo $parrilla;	
	}
	

	mysqli_close($con);

?>
