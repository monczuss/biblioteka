<?php
session_start();

require_once 'connection.php';

$id= $_SESSION['id'];
$name =$_POST['name'];
$release =$_POST['release'];
$author = $_POST["author"];
$isbn = $_POST["isbn"];
$status = $_POST["status"];

date_default_timezone_set('Europe/Warsaw');
$date = date('Y-m-d H:i:s', time());

$query="update ksiazki set tytul='".$name."',data_wydania='".$release."',data_dodania='".$date."', autor='".$author."', isbn='".$isbn."', status='".$status."' where id='".$id."'";

mysqli_query($dbc, $query)
or die ("Błąd w przetwarzaniu zapytania");

if ($query) {
    echo "Zaaktualizowano, wróć do panelu!";
} else {
    echo "Błąd"; 
}

mysqli_close($dbc);

?>
