<?php
  session_start();
  require 'validarsesion.php';
?>
<?php

require 'conectar.php';


$registros=mysqli_query($con, "SELECT tip.idtipopropiedad, count( pro.idpropiedad ) AS cant
FROM tipospropiedades AS tip
LEFT JOIN propiedades AS pro ON ( pro.idtipopropiedad = tip.idtipopropiedad )
WHERE tip.idtipopropiedad = $_GET[id]
GROUP BY tip.idtipopropiedad") or
die("Problemas en el select:".mysqli_error($con));

$reg=mysqli_fetch_array($registros);

if ( $reg['cant']==0){
mysqli_query($con, "DELETE FROM tipospropiedades
		 WHERE idtipopropiedad=$_GET[id] ") or
die("Problemas en el select:".mysqli_error($con));header("location: http://grupo04.php.info.unlp.edu.ar/backend.php");}
else{?> <script language="javascript">
alert("El tipo No se puede borrar porque hay propiedades con dicho tipo, elimine las propiedades y despues el tipo!,");
window.location='tpropiedades.php';
</script>  <?php
}
									



mysqli_close($con);


?> 

