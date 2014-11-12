<?php
 	include('conectar.php');
 	$caracNombre = mysqli_query($con,"SELECT * FROM caracteristicaspropiedades");
 	if (isset($_GET['filtro'])) {
		if ($_GET['filtro']==1) {
			echo '<form name="filtro2" action="propiedades.php?filtro=1" method="post">';
		}else{
			if ($_GET['filtro']==2) {
				echo '<form name="filtro2" action="propiedades.php?filtro=2" method="post">';
			}else{ //alguien toco el numero manualmente
				echo '<form name="filtro2" action="propiedades.php" method="post">';
			}
		} 

	}else{
		echo '<form name="filtro2" action="propiedades.php" method="post">';
	}

 	echo '<form name="filtro2" action="propiedades.php?filtro=1" method="post">';
 	$tilde = '';
 	while($row = mysqli_fetch_array($caracNombre)) {
 		if (isset($_POST[$row["caracteristica"]])) {
 			$tilde = 'checked';
 		}
 		echo '<input type="checkbox" name="'.$row["caracteristica"].'" value="'.$row["caracteristica"].'"'.$tilde.'> '.$row["caracteristica"].' <br>';
 		$tilde = '';
	}
	echo'<input type="submit" value="filtrar" name="filtro3">';
	echo '</form>';
	mysqli_close($con);
?>