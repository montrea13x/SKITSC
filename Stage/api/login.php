<?php
	$hn = 'localhost';
	$db = 'skitsc';
	$un = 'root';
	$pw = 'mysql';
	$conn = new mysqli ($hn ,$un ,$pw ,$db);
	
	if(!$conn){
		die("Erreur de connection");
	}
	session_start();
	$courriel = $_POST['courriel'];
	$password = $_POST['password'];
	
	$sql = "SELECT * FROM connexion WHERE courriel = '$courriel' AND password = '$password'";
	$resultat = mysqli_query($conn, $sql);
	if(mysqli_num_rows($resultat) > 0){
		$_SESSION['courriel'] = $_POST['courriel'];
		echo "http://localhost/Stage/dashboard.php";
	}
	else{
		$_SESSION['courriel'] = '';
		$_SESSION['erreur'] = "Le courriel et le mot de passe ne correspondent pas.";
		echo "http://localhost/Stage";
	}
?>