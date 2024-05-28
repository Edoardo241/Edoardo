<?php
	session_start();
	if (!isset($_SESSION['start_time'])) {
		header('Location:http://sql307.infinityfree.com/if0_36600023_informazioni/login.php');
		die;
	}
	else {
		$now = time();
		$time = $now - $_SESSION['start_time'];
		if ($time > 30) { // 3600s => 1h
			header('Location:http://sql307.infinityfree.com/if0_36600023_informazioni/logout.php');
			die;
		}
	}
?>