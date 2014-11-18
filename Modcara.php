<?php
	session_start();
	require 'validarsesion.php';
?>


<htlm>
		<h1>Modificar Caracteristicas</h1> 	
		<?php


			if(isset($_GET["mod"])){
				$caracteristica=$_POST['caracteristica'];
				$id=$_GET['id'];
				require 'conectar.php';
				$sql=mysqli_query($con, "SELECT * FROM caracteristicaspropiedades WHERE caracteristica = '$caracteristica'");
				if(mysqli_fetch_array($sql)){
					echo '<font color="#AA0000" size="15px"><b> Ya existe la Caracteristica </b></font>';
				}else{
					mysqli_query($con, "UPDATE caracteristicaspropiedades SET caracteristica = '$caracteristica' WHERE idcaracteristica = '$id'") or die("Problemas en el select:".mysqli_error($con));
					echo '<font color="#0000AA" size="6px"><b> Se ha modificado la caracteristica correctamente </b></font>';
				}
				mysqli_close($con);
			}

			require 'conectar.php';

			$registros=mysqli_query($con, "SELECT * FROM caracteristicaspropiedades WHERE idcaracteristica = '$_GET[id]'") or die("Problemas en el select:".mysqli_error($con));
			$reg=mysqli_fetch_array($registros);
			mysqli_close($con);
		?>

		<div id="decodificador">	
			<form action="Modcara.php?mod=ok&id=<?php echo $_GET["id"]; ?>"  name="formulario" method="post">
				Caracteristica:
				<input type="text" name="caracteristica" id="caracteristica" required="required" value="<?php echo $reg['caracteristica'] ?>">  
				<input type="submit" value="Modificar">
			</form>
		</div>
		<input type="button" value="volver" onclick="location.href='caracteristicas.php'">	

</html>
