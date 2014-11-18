<?php



	$sort = "";
        if(isset($_POST['sort'])) {
            switch ($_POST['sort'] ) {
            case 0: 
                        $sort = " ORDER BY p.idtipopropiedad ASC"; 
                        break;
            case 1:
                        $sort = ' ORDER BY p.idtipopropiedad DESC';
                        break;
            case 2: 
                        $sort = " ORDER BY p.precio ASC"; 
                        break;
            case 3:
                        $sort = ' ORDER BY p.precio DESC';
                        break;
            }
        }


   
    

    $gianni = '';

    $caracId = mysqli_query($con,"SELECT * FROM caracteristicaspropiedades");

	while($row = mysqli_fetch_array($caracId)) {
 		if (isset($_POST[$row['idcaracteristica']])) {
 			if ($gianni == '') {
 				$gianni = 'WHERE EXISTS(SELECT * FROM caracteristicaspropiedades_propiedades WHERE p.idpropiedad = idpropiedad AND idcaracteristica = '.$row["idcaracteristica"].')';
 			}else{
 				$gianni .= 'AND EXISTS (SELECT * FROM caracteristicaspropiedades_propiedades WHERE p.idpropiedad = idpropiedad AND idcaracteristica = '.$row["idcaracteristica"].')';
 			}
 			
 		}
 	} 


	$prop = mysqli_query($con,'SELECT * FROM propiedades as p '.$gianni.' '.$sort.'');

?>