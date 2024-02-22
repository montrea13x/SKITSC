<!DOCTYPE html>
<html>
	<head>
		<title>SKITSC</title>
		<link rel="stylesheet" href="css/styles.css">
	</head>
	<body>
		<?php
			include 'api/session.php';
		?>
		<table>
			<tr>
				<th>
					<a href="http://localhost/Stage" >Deconnection</a>
					|
					<?php echo "$_SESSION[courriel]" ?>
				</th>
			</tr>
		</table>
		
		<h1>Dashboard</h1>
	</body>
</html>