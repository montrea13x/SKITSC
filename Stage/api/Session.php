<?php
	session_start();
	$_SESSION['erreur'] = null;
		if($_SESSION['courriel'] == ''){		
			header("Location: http://localhost/Stage");
			die();
		}
?>