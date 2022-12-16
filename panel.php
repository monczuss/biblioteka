<?php

	session_start();
	
	if (!isset($_SESSION['login']))
	{
		header('Location: logowanie.php');
		exit();
	}
	
?>
<!DOCTYPE HTML>
<html lang="pl">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Biblioteka - Panel Admina</title>
	<meta name="author" content="Jakub Maczka">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<link rel="icon" type="image/png" href="img/logo.ico">
	<link rel="stylesheet" type="text/css" href="css/panel.css">
</head>

<body>
	<div class="page-wrap">
		<div class="info-container">
			<?php
			echo "<p>Konto: <b>".$_SESSION['login'].'</b></p>';
			echo "<p>E-mail: <b>".$_SESSION['email'].'</b></p>';
		?>
		</div>
		<div class="action-container">
			<h4>Akcje profilu</h4>
			<ul>
				<li><a href="./index.php">Strona główna</a></li>
				<li><a href="./php/logout.php">Wyloguj</a></li>
			</ul>
			<h4>Menadżer książek</h4>
			<ul>
				<li><a href="./information.php">Edytowanie/Usuwanie książek</a></li>
			</ul>
		</div>
	</div>
</body>

</html>