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


	$tipo = mysqli_query($con,"SELECT * FROM tipospropiedades");
/*	
	if (($cochera == 1) AND ($pileta == 1) AND ($parrilla == 1)) {
		$prop = mysqli_query($con,"SELECT * FROM propiedades as p WHERE EXISTS(SELECT * FROM caracteristicaspropiedades_propiedades WHERE idpropiedad = p.idpropiedad AND idcaracteristica = 1) AND EXISTS(SELECT * FROM caracteristicaspropiedades_propiedades WHERE idpropiedad = p.idpropiedad AND idcaracteristica = 2) AND EXISTS(SELECT * FROM caracteristicaspropiedades_propiedades WHERE idpropiedad = p.idpropiedad AND idcaracteristica = 3) $sort ");
	}else{
		if (($cochera == 1) AND ($pileta == 1)) {
			$prop = mysqli_query($con,"SELECT * FROM propiedades as p WHERE EXISTS(SELECT * FROM caracteristicaspropiedades_propiedades WHERE idpropiedad = p.idpropiedad AND idcaracteristica = 1) AND EXISTS(SELECT * FROM caracteristicaspropiedades_propiedades WHERE idpropiedad = p.idpropiedad AND idcaracteristica = 2)" . $sort);
		}else{
			if (($cochera == 1) AND ($parrilla == 1)) {
				$prop = mysqli_query($con,"SELECT * FROM propiedades as p WHERE EXISTS(SELECT * FROM caracteristicaspropiedades_propiedades WHERE idpropiedad = p.idpropiedad AND idcaracteristica = 1) AND EXISTS(SELECT * FROM caracteristicaspropiedades_propiedades WHERE idpropiedad = p.idpropiedad AND idcaracteristica = 3)" . $sort);
			}else{
				if (($pileta == 1) AND ($parrilla == 1)) {
					$prop = mysqli_query($con,"SELECT * FROM propiedades as p WHERE EXISTS(SELECT * FROM caracteristicaspropiedades_propiedades WHERE idpropiedad = p.idpropiedad AND idcaracteristica = 2) AND EXISTS(SELECT * FROM caracteristicaspropiedades_propiedades WHERE idpropiedad = p.idpropiedad AND idcaracteristica = 3)" . $sort);
				}else{
					if ($cochera == 1) {
					$prop = mysqli_query($con,"SELECT * FROM propiedades as p WHERE EXISTS(SELECT * FROM caracteristicaspropiedades_propiedades WHERE idpropiedad = p.idpropiedad AND idcaracteristica = 1)" . $sort);
					}else{
						if ($pileta == 1) {
							$prop = mysqli_query($con,"SELECT * FROM propiedades as p WHERE EXISTS(SELECT * FROM caracteristicaspropiedades_propiedades WHERE idpropiedad = p.idpropiedad AND idcaracteristica = 2)" . $sort);
						}else{
							if ($parrilla == 1) {
								$prop = mysqli_query($con,"SELECT * FROM propiedades as p WHERE EXISTS(SELECT * FROM caracteristicaspropiedades_propiedades WHERE idpropiedad = p.idpropiedad AND idcaracteristica = 3)" .$sort);
							}else{
									$prop = mysqli_query($con,"SELECT * FROM propiedades as p" .$sort);
							}
						}
					}
				}
			}
		}
	}  esto lo saque porque no soportaba la carga dinamica de caracteristicas y filtros en base a esas caracteristicas
		lo dejo como comentario para fururas referencias o algo que necesitemos de consultas sql. */
	$prop = mysqli_query($con,"SELECT * FROM propiedades as p" .$sort);

?>