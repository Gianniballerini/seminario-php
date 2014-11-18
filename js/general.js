function logout() {

	document.location.href = "./logout.php";

}

function decicion(aUrl){
	if (confirm('¿Quiere borrar la categoria?')) {
		document.location.href = aUrl;
	} else {
		return false;
	}		

}

