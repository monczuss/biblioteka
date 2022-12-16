<?php

	session_start();
	
	if (!isset($_SESSION['login']))
	{
		header('Location: logowanie.php');
		exit();
	}
	
    include 'php/displayData.php';

?>
<!DOCTYPE HTML>
<html lang="pl">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Biblioteka - Edycja książek</title>
    <meta name="author" content="Jakub Maczka">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
	<link rel="icon" type="image/png" href="img/logo.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
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
                <li><a href="./information.php">Menadżer książek</a></li>
                <li><a href="./php/logout.php">Wyloguj</a></li>
            </ul>
        </div>
        <div class="edit-container">
            <form method="post">
                <div class="form-group">
                    <label for="name">Tytuł książki</label>
                    <input type="text" class="form-control" value="<?php echo $row['tytul'];?>" name="name">

                </div>
                <div class="form-group">
                    <label for="release">Data wydania</label>
                    <input type="text" class="form-control" value="<?php echo $row['data_wydania'];?>" name="release">
                </div>
                <div class="form-group">
                    <label for="author">Autor</label>
                    <input type="text" class="form-control" value="<?php echo $row['autor'];?>" name="author">
                </div>
                <div class="form-group">
                    <label for="isbn">ISBN</label>
                    <input type="number" class="form-control" value="<?php echo $row['isbn'];?>" name="isbn">
                </div>
                <div class="form-group">
                    <label for="status">Status wypożyczenia</label>
                    <input type="number" class="form-control" value="<?php echo $row['status'];?>" name="status">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn">Zaakutalizuj</button>
                    <p class="message"></p>
                </div>
            </form>
        </div>
        <script type="text/javascript" src="js/edit.js"></script>
</body>

</html>