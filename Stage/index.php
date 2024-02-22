<!DOCTYPE html>
<html>
	<head>
		<title>SKITSC</title>
		<link rel="stylesheet" href="css/styles.css">
		<script src="js/login.js"></script>
	</head>
	
	<body>
			
		<form class="connection" method="post" id='form'>
			<h2 text-align="center">Connection</h2>
			
			<div><pre>Courriel :		<input type="email" maxlength="60" name="courriel" id="courriel"
			pattern="[a-zA-Z0-9._%+\-]+@[a-zA-Z0-9.\-]+\.[a-zA-Z]{2,}$"	required></pre></div>
			
			<div><pre>Mot de passe :	<input type="password" maxlength="30" name="password" id="password"
			pattern="(?=(?:[^A-Z]*[A-Z]){1})(?=(?:\D*\d){2}).*" title="Le mot de passe doit avoir au moins 2 chiffres et 1 majuscule" required></pre></div>
			
			<button value="Connecter" onclick="getDataForm()">Connecter</button>
			<p>
				<?php
					include 'api/SessionNull.php';
				?>
			</p>
		</form>	
		
	</body>

</html>
