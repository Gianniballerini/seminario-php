

<?php

include('./conectar.php');

class MiExcepcionPersonalizada extends Exception
{

  function __toString()
  {
     return $this->getMessage();
  }

}

function redirigir()
{
	header("Location: ./index.php");
}

$url="'index.php'";

session_start();

if (!empty($_POST["usuario"]) AND !empty($_POST["clave"]))
{
	$usu=mysqli_query($con, "SELECT * FROM usuarios WHERE nombreusuario='$_POST[usuario]'");
	if (($user_ok=mysqli_fetch_array($usu)) AND ($user_ok['clave']==$_POST["clave"])){


		//session_register("usuario");
		//session_register("estado");

		$_SESSION['usuario']=$user_ok["nombreusuario"];
		$_SESSION['estado']=true;
		Header("Location: ./backend.php");


	}else{
		try{
		   throw new MiExcepcionPersonalizada('nombre de usuario o contraseña incorrectos');
		}
		catch(MiExcepcionPersonalizada $excepcion){
		   echo $excepcion;
		   $_SESSION['estado']=false;
		   echo '<input onclick="document.location.href='.$url.'" type="submit" value="volver">';
		}

	}
}
else
{
	
try{
   throw new MiExcepcionPersonalizada('Falta completar los campos.');
}
catch(MiExcepcionPersonalizada $excepcion)
{
   echo $excepcion;
   $_SESSION['estado']=false;
   echo '<input onclick="document.location.href='.$url.'" type="submit" value="volver">';
}


	
}
?>
