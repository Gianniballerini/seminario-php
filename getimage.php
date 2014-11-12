<?php

  $id = $_GET['id'];
  // do some validation here to ensure id is safe

  include("conectar.php");


  $sql = "SELECT contenidoFoto FROM propiedades WHERE idpropiedad=$id";
  $result = mysqli_query($con, "$sql");
  $row = mysqli_fetch_assoc($result);

  $sql2 = "SELECT tipoFoto FROM propiedades WHERE idpropiedad=$id";
  $result2 = mysqli_query($con, "$sql2");
  $row2 = mysqli_fetch_assoc($result2);

  mysqli_close($con);

  header("Content-type: $row2[tipoFoto]");
  echo $row['contenidoFoto'];

?>