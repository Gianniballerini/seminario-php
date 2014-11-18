<?php

if(!isset($_SESSION['estado']) || $_SESSION['estado'] != true){
	header("location: index.php");
}

?>
