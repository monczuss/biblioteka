<?php 

require_once 'connection.php';

$id=$_REQUEST['id'];
$_SESSION['id'] = $id;

$query = "SELECT * from ksiazki where id='".$id."'"; 

$result = mysqli_query($dbc, $query)
or die ("Błąd w przetwarzaniu zapytania");

$row = mysqli_fetch_array($result);

mysqli_close($dbc); 

?>