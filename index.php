<!DOCTYPE HTML>
<html lang="pl">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Biblioteka - Strona glówna</title>
    <meta name="author" content="Jakub Maczka">
    <meta name="description" content="XXX">
    <meta name="keywords" content="XXX" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
	<link rel="icon" type="image/png" href="img/logo.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <div class="page-wrap">
        <nav class="nav-container">
            <div class="logo">
                <img src="./img/logo.png" alt="logo" class="logo" />
            </div>
            <div class="nav-box">
                <ul class="nav-ul">
                    <li><a href="https://www.google.com">Link pierwszy</a></li>
                    <li><a href="https://www.google.com">Link drugi</a></li>
                    <li><a href="https://www.google.com">Link trzeci</a></li>
                </ul>
            </div>
        </nav>
        <aside class="aside-container">
            <h4>10 Najnowszych książek</h4>
            <span class="line"></span>
            <?php include 'php/displayBooks.php';?>
        </aside>
        <main class="main-container">
            <h3>Formularz</h3>
            <form method="post">
                <div class="form-group">
                    <label for="name">Tytuł książki</label>
                    <input type="text" class="form-control" name="name">
                </div>
                <div class="form-group">
                    <label for="release">Data wydania</label>
                    <input type="date" class="form-control" name="release">
                </div>
                <div class="form-group">
                    <label for="author">Autor</label>
                    <input type="text" class="form-control" name="author">
                </div>
                <div class="form-group">
                    <label for="isbn">ISBN</label>
                    <input type="number"class="form-control" name="isbn">
                </div>
                <div class="form-check">
                    <label class="form-check-label" for="status">Status wypożyczenia</label>
                    <input class="form-check-input" type="checkbox" name="status">
                </div>

                <button type="reset" class="btn">Zresetuj</button>
                <button type="submit" class="btn pull-right">Wyślij</button>
                <p class="message"></p>
            </form>
        </main>
        <footer class="footer-container">
            <h3>Kontakt</h3>
            <span class="line"></span>
            <div class="text-center">
                <p>Adres Biblioteki:<span>ul.123322</span></p>
                <p>Numer Telefonu<span>+48 123456789</span></p>
            </div>
            <a href="logowanie.php">admin panel</a>
        </footer>
    </div>
    <script type="text/javascript" src="js/app.js"></script>
</body>

</html>