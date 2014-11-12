<?php

$con = mysqli_connect("localhost","grupo04","grupo5561","grupo04") or die("Error " . mysqli_error($con)); 

if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
?>