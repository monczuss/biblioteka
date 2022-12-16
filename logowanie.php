<?php

	session_start();
	
	if ((isset($_SESSION['login'])) && ($_SESSION['login']==true))
	{
		header('Location: panel.php');
		exit();
	}

?>

<!DOCTYPE HTML>
<html lang="pl">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Biblioteka - Strona logowania</title>
    <meta name="author" content="Jakub Maczka">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <link rel="icon" type="image/png" href="img/logo.ico">
    <link rel="stylesheet" type="text/css" href="css/logowanie.css">
    <script src="https://kit.fontawesome.com/b60a717c62.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="page-wrap">
        <div class="login-container">
            <h2>Logowanie</h2>
            <form action="php/login.php" method="POST">
                <div class="user-box">
                    <input type="text" name="login">
                    <label>Użytkownik</label>
                </div>
                <div class="user-box">
                    <input class="password" type="password" name="password">
                    <label>Hasło</label>
                    <span class="fa fa-fw fa-eye toggle-password"></span>
                </div>
                <div class="user-error">                
                <?php
	                if(isset($_SESSION['error']))	echo $_SESSION['error'];
                ?></div>
                <button type="submit">Zaloguj</button>
            </form>
            <a href="index.php">Powrót na stronę</a>
        </div>
    </div>
    <script type="text/javascript" src="js/login.js"></script>
</body>

</html>