<html>
<head>
    <title>DB & PHP test</title>
</head>
<body>
<?php
include 'session.php';

// Connessione al database passando i dati di: servername, username, password, database
//$connection = mysqli_connect("localhost", "root", "root", "informazioni");
$connection = mysqli_connect("sql307.infinityfree.com", "if0_36600023", "XJOaycH3CQ2zZ7B", "if0_36600023_informazioni");

// Controlla se la connessione ha avuto successo
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

echo "Connessione riuscita!<br>";

// Query per ottenere i dati
$query = "SELECT libri.id_libro, libri.nome, info.denominazione 
          FROM libri 
          JOIN info ON libri.genere = info.genere 
          ORDER BY info.denominazione, libri.nome";

// Esegui la query
$result = mysqli_query($connection, $query);//effettua la query passata come parametro
											// e restituisce un riferimento al risultato	
											// o false in caso di errore 

// Controlla se ci sono risultati
if (mysqli_num_rows($result) > 0) {			//restituisce il numero di righe del risultato di una query
    echo "<table border='1'>";
    echo "<tr><th>Id</th><th>Libro</th><th>Genere</th></tr>";

    // Loop attraverso i risultati della query
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['id_libro'] . "</td>";
		// echo "<td>$row[0]</td>";
        echo "<td>" . $row['nome'] . "</td>";
		// echo "<td>$row[1]</td>";
        echo "<td>" . $row['denominazione'] . "</td>";
		// echo "<td>$row[1]</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "Nessun libro è presente nel database.";
}

// Chiudi la connessione
mysqli_close($connection);
?>
<br>
<a href="http://sql307.infinityfree.com/if0_36600023_informazioni/add.php">Inserimento nuovo libro.</a><br>
<a href="http://sql307.infinityfree.com/if0_36600023_informazioni/del.php">Eliminazione libro esistente.</a>
</body>
</html>
