<?php

require_once 'database.php';

$dbc = mysqli_connect($servername, $username, $password, $database);

if (mysqli_connect_errno()) {
   die("Problem z polaczeniem: %s\n" + mysqli_connect_error());
   exit();
}
?>