<?php

require_once 'connection.php';

$id = $_REQUEST['id'];

$query = "DELETE FROM ksiazki WHERE id='".$id."'"; 

mysqli_query($dbc, $query)
or die ("Błąd w przetwarzaniu zapytania"); 

header('Location: ../information.php');

mysqli_close($dbc);
?>