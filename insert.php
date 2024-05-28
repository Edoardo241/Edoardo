<?php
include 'session.php';
?>

<html>
<head>
<title>DB & PHP test: INSERT</title>
</head>
<body>
<?php
	$id_libro = strtoupper($_GET["id_libro"]);
	
	$nome=$_GET["nome"];
	
	$genere=$_GET["genere"];
	
	$connection= mysqli_connect("sql307.infinityfree.com", "if0_36600023", "XJOaycH3CQ2zZ7B", "if0_36600023_informazioni");
	
	$query="SELECT *FROM libri
			WHERE id_libro ='$id_libro'
			OR nome = '$nome'";
	
	$result = mysqli_query($connection, $query);
	
	if (mysqli_num_rows($result)!= 0)
		echo "Libro o id esistente!";
	
	else {
		$query="INSERT INTO libri VALUES
				('$id_libro', '$nome', '$genere')";
		$result = mysqli_query($connection, $query);
		if ($result > 0)
			echo "Libro $nome inserito!";
		else
			echo "Errore, libro $nome non inserito!";
	}

	mysqli_close($connection);
	
	
	?>
	<br><br>
	<a href="http://sql307.infinityfree.com/if0_36600023_informazioni/Informazioni.php">Visualizzazione elenco libri</a>
</body>
</html>