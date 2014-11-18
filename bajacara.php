<?php
  session_start();
  require 'validarsesion.php';
?>
<?php

require 'conectar.php';


$registros=mysqli_query($con, "SELECT car.idcaracteristica, count( pro.idpropiedad ) AS cant
FROM caracteristicaspropiedades AS car INNER JOIN caracteristicaspropiedades_propiedades AS cap ON (car.idcaracteristica = cap.idcaracteristica)
LEFT JOIN propiedades AS pro ON ( pro.idpropiedad = cap.idpropiedad )
WHERE car.idcaracteristica = $_GET[id]
GROUP BY car.idcaracteristica") or
die("Problemas en el select:".mysqli_error($con));

$reg=mysqli_fetch_array($registros);

if ( $reg['cant']==0){
mysqli_query($con, "DELETE FROM caracteristicaspropiedades
		 WHERE idcaracteristica=$_GET[id] ") or
die("Problemas en el select:".mysqli_error($con));header("location: http://grupo04.php.info.unlp.edu.ar/backend.php");}
else{?> <script language="javascript">
alert("La caracteristica No se puede borrar porque hay propiedades con dicha caracteristica, elimine las propiedades y despues la caracteristica!,");
window.location='caracteristicas.php';
</script>  <?php
}
									



mysqli_close($con);


?> 

