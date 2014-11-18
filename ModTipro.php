<?php
	session_start();
	require 'validarsesion.php';
?>


<htlm>
		<h1>Modificar Tipo de Propiedades</h1> 	
		<?php


			if(isset($_GET["mod"])){
				$tipopropiedad=$_POST['tipopropiedad'];
				$id=$_GET['id'];
				require 'conectar.php';
				$sql=mysqli_query($con, "SELECT * FROM tipospropiedades WHERE tipopropiedad = '$tipopropiedad'");
				if(mysqli_fetch_array($sql)){
					echo '<font color="#AA0000" size="15px"><b> Ya existe el Tipo </b></font>';
				}else{
					mysqli_query($con, "UPDATE tipospropiedades SET tipopropiedad = '$tipopropiedad' WHERE idtipopropiedad = '$id'") or die("Problemas en el select:".mysqli_error($con));
					echo '<font color="#0000AA" size="6px"><b> Se ha modificado el Tipo correctamente </b></font>';
				}
				mysqli_close($con);
			}

			require 'conectar.php';

			$registros=mysqli_query($con, "SELECT * FROM tipospropiedades WHERE idtipopropiedad = '$_GET[id]'") or die("Problemas en el select:".mysqli_error($con));
			$reg=mysqli_fetch_array($registros);
			mysqli_close($con);
		?>

		<div id="decodificador">	
			<form action="ModTipro.php?mod=ok&id=<?php echo $_GET["id"]; ?>"  name="formulario" method="post">
				Tipo propiedades:
				<input type="text" name="tipopropiedad" id="tipopropiedad" required="required" value="<?php echo $reg['tipopropiedad'] ?>">  
				<input type="submit" value="Modificar">
			</form>
		</div>
		<input type="button" value="volver" onclick="location.href='tpropiedades.php'">	

</html>
