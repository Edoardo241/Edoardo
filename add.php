<?php
include 'session.php';
?>

<html>
<head>
    <title>DB & PHP test: INSERT</title>
</head>
<body>
    <form action="insert.php" method="GET"><br>
        Inserimento nuovo Libro<br><br>
        Id: &nbsp <input type="text" name="id_libro" size="2" maxlength="2">&nbsp&nbsp
        Nome: &nbsp <input type="text" name="nome"><br><br>
        Genere:<br>
        <select name="genere">
            <option value="FN">Fantascientifico</option>
            <option value="HR">Horror</option>
            <option value="RM">Romantico</option>
            <option value="CM">Comico</option>
        </select><br><br>
        <input type="submit" value="Inserisci">
    </form>
</body>
</html>
