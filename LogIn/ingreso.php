<?php
	include "bd.php";
	if (isset($_POST['userLogin']) && isset($_POST['passLogin'])){
		$usr = $_POST['userLogin'];
		$pass = $_POST['passLogin'];
		$bd = new BD_JUM();
		if($bd->ingreso($usr, $pass)){
			echo '<script type="text/javascript"> window.location.href = "../home/index.html"; </script>';
		}else{
			echo '<script type="text/javascript"> window.location.href = "index.html"; alert("El usuario o la contraseña son incorrectos"); </script>';
		}
	}
	
?>