<?php

require 'validarsesion.php';
session_start();

$_SESSION['estado'] = false;
header ("location: index.php");

?>
