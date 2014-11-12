<?php
	/* Desplegamos cada uno de los registros dentro de una tabla */  
	echo "<table class='tableStyle2' >";

	/*Priemro los encabezados*/
	echo "<tr>
         <th colspan=7> Listado de Propiedades </th>
         <tr/>
       <tr>
          <th> Det </th>
       ";
  $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
  echo '<form id="sort0"  action='.$actual_link.' method="post">
          <input type="hidden" name="sort" value=0>
        </form>
      <form id="sort1"  action='.$actual_link.' method="post">
          <input type="hidden" name="sort" value=1>
      </form>
      <form id="sort2"  action='.$actual_link.' method="post">
          <input type="hidden" name="sort" value=2>
      </form>
      <form id="sort3"  action='.$actual_link.' method="post">
          <input type="hidden" name="sort" value=3>
      </form>
  ';

    echo "<th> Tipo <button type='submit' name='sorted' form='sort0'> up </button> <button type='submit' name='sorted' form='sort1'> down </button> </th>";
    echo "<th> Precio <button type='submit' name='sorted' form='sort2'> up </button> <button type='submit' name='sorted' form='sort3'> down </button> </th>";  

  

  echo "<th> Direcion </th>
        <th> Cantidad Ambientes </th>
        <th> Cantidad Banos </th>
      </tr>";
?>