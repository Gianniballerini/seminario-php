<?php

		echo '
		<tr>
			<td> <a href="./detalles.php?id='.$row["idpropiedad"].'" target="_blank"> <img src="./img/plus.png" width="15px" height="15px" /> </a> </td>
         	<td> '.$row2["tipopropiedad"].' </td>
	        <td> '.$row["precio"].' </td>
	        <td> Calle '.$row["calle"].' Nro '.$row["nro"].' piso '.$row["piso"].' dpto '.$row["dpto"].' </td>
	        <td> '.$row["cantambientes"].' </td>
	        <td> '.$row["cantbanos"].' </td>
     	</tr>';
?>