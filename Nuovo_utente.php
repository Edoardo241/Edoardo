<html>
	<head>
		<title>Nuovo utente</title>
	</head>
	<body>
	<?php
	if (!isset($_POST['username']) || !isset($_POST['password'])) {
	?>
		<form method = "POST" action = "nuovo_utente.php">
			Username <input name = "username" type = "text"><br>
			Password &nbsp <input name = "password" type = "password"><br><br>
			<input type = "submit" value = "Registra utente">
		</form>
	<?php
	}
	else {
		$username = $_POST['username'];
		$password = $_POST['password'];
		if (strlen($username) != 0 && strlen($password) != 0) {
		$password = crypt($password, 0); // cifratura della password
		$connection =
		mysqli_connect("sql307.infinityfree.com", "if0_36600023", "XJOaycH3CQ2zZ7B", "if0_36600023_informazioni");
		$query = "SELECT * FROM Utenti WHERE username = '$username'";
		$result = mysqli_query($connection, $query);
		if (mysqli_num_rows($result) != 0)
		echo "Utente $username gi&agrave; presente nel database.";
		else {
		$query = "INSERT
				  INTO Utenti (username, password, DB_username, DB_password)
				  VALUES ( '$username', '$password', 'root', '')";
		mysqli_query($connection, $query);
		echo "Utente $username aggiunto al database.";
	}
	mysqli_close($connection);
	}
	else
		echo "Username/password non validi.";
	}
	?>
	</body>
</html>