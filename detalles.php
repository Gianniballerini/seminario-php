<?php
		include("conectar.php");
		$prop = mysqli_query($con,"SELECT * FROM propiedades as p WHERE idpropiedad = '$_GET[id]'");
		$row = mysqli_fetch_array($prop);
		$id = $row["idtipopropiedad"];
		$resultado = mysqli_query($con, "SELECT tipopropiedad FROM tipospropiedades WHERE idtipopropiedad = $id");
		$row2 = mysqli_fetch_array($resultado);
		$carac = mysqli_query($con,"SELECT * FROM caracteristicaspropiedades_propiedades WHERE idpropiedad = '$_GET[id]'");

?>

<html>
		<link rel="stylesheet" type="text/css" href=".././css/main.css">
		<div id="arriba">
			<div id="middle">
				INMOBILIARIA <br/ >
				W-G
			</div>
		</div>
			
			<div id="foto">
				<?php
					echo '<img id="maxmin" src="getimage.php?id='.$_GET['id'].'"  />'
				?>
			</div>
			<div id="info">
				<?php
					echo '
						<div class="data">
							Tipo: '.$row2["tipopropiedad"].'
						</div>
						<div class="data">
							Calle: '.$row["calle"].'
						</div>
						<div class="data">
							Numero: '.$row["nro"].'
						</div>	
						<div class="data">
							Piso: '.$row["piso"].'
						</div>
						<div class="data">
							Dpto: '.$row["dpto"].'
						</div>
						<div class="data">
							Estado: '.$row["estado"].'
						</div>
						<div class="data">
							Zona: '.$row["zona"].'
						</div>
						<div class="data">
							Ambientes: '.$row["cantambientes"].'
						</div>
						<div class="data">
							Banos: '.$row["cantbanos"].'
						</div>';

						while($row3 = mysqli_fetch_array($carac)) {
							$caracNombre = mysqli_query($con,"SELECT * FROM caracteristicaspropiedades WHERE idcaracteristica = $row3[idcaracteristica]");
							$row4 = mysqli_fetch_array($caracNombre);
							echo '	
									<div class="data">
										'.$row4["caracteristica"].'
									</div>';
						}
						echo '	<div class="data">
									Observaciones: '.$row["observaciones"].'
								</div>
								<div class="data">
									Precio: '.$row["precio"].'
								</div>';
						
				?>
			</div>

		<div id="footer">
			Inmobiliaria W-G Seminario de PHP
		</div>



	</html>

<?php
	mysqli_close($con);
?>
	<!--

		echo "esto es una prueba";
		var_dump($_GET['id']);

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
	-->



