<?php
	// distruzione sessione corrente
	session_start();
	session_unset();
	session_destroy();
	$_SESSION = array();
?>
<html>
	<head>
		<title>Logout</title>
	</head>
	<body>
		Sessione conclusa o scaduta:
		<a href = "http://sql307.infinityfree.com/if0_36600023_informazioni/login.php">login.</a>
	</body>
</html>