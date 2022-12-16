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
	<title>Biblioteka - Menadżer książek</title>
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
				<li><a href="./panel.php">Panel Admina</a></li>
				<li><a href="./php/logout.php">Wyloguj</a></li>
			</ul>
		</div>
		<div class="table-container">
			<?php include 'php/displayInformation.php'; ?>
		</div>
	</div>
</body>

</html>