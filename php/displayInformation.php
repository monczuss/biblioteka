<?php 

require_once 'connection.php';

$query="SELECT * FROM ksiazki";

$result =mysqli_query($dbc, $query)
or die ("Błąd w przetwarzaniu zapytania");

$num_rows = mysqli_num_rows($result);

if ($num_rows>0)
{
    echo "<h3>DANE KSIĄŻEK<h3><h5>Status: 1 - wypożyczona, 0 - niewypożyczona</h5><table><tr><th>ID</th><th>TYTUŁ</th><th>DATA WYDANIA</th><th>DATA DODANIA</th><th>AUTOR</th><th>ISBN</th><th>STATUS</th></tr>";
    while($row = mysqli_fetch_array($result)){
	    $i=0;
        echo '<tr><td>' . $row["id"]. '</td><td>' . $row["tytul"] . "</td><td>".$row['data_wydania'].'</td><td>'.$row['data_dodania'].'</td><td>'.$row['autor'].'</td><td>'.$row['isbn'].'</td><td>'.$row['status'].'</td><td><a class="edit" href="./edit.php?id='.$row['id'].'">EDYTUJ</a></td><td><a class="delete" href="./php/deleteBook.php?id='.$row['id'].'">USUŃ</a></td></tr>';
	    $i++;
    }
    echo "</table>";
	} else { echo "<h3>Brak danych o książkach</h3>"; }
    
mysqli_close($dbc);

?>