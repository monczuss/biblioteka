<?php 

require_once 'connection.php';

$query="SELECT * FROM ksiazki ORDER BY data_dodania DESC LIMIT 0,10";

$result =mysqli_query($dbc, $query)
or die ("Błąd w przetwarzaniu zapytania");

$num_rows = mysqli_num_rows($result);

if ($num_rows>0)
{
    echo "<table><tr><th>TYTUŁ</th><th>ISBN</th></tr>";
    while($row = mysqli_fetch_array($result)){
	    $i=0;
        echo '<tr><td>„' . $row["tytul"]. '”</td><td>' . $row["isbn"] . "</td>";
	    $i++;
    }
    echo "</table>";
	} else { echo "<h5>Brak danych o książkach</h5>"; }
    
mysqli_close($dbc);

?>