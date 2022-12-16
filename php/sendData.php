<?php 

require_once 'connection.php';

$name= $_POST['name'];  
$release= $_POST['release'];
$author= $_POST['author'];
$isbn= $_POST['isbn'];
$status = isset($_POST['status']) ? 1 : 0;

$query = "INSERT INTO ksiazki (tytul, data_wydania, autor, isbn, status) VALUES ('$name', '$release', '$author', '$isbn', '$status')";

mysqli_query($dbc, $query)
or die ("Błąd w przetwarzaniu zapytania");

if ($query) {
    echo "Dodano książkę, odśwież stronę!";
} else {
    echo "Błąd"; 
}
 
mysqli_close($dbc); 

?>