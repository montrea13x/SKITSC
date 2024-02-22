<?php
	session_start();
	$_SESSION['erreur'] = '';
		if($_SESSION['courriel'] == ''){		
			header("Location: http://localhost/Stage");
			die();
		}
?>