<?php 

	session_start();

	include('../config/db_connection.php');

	if ($dbconfig) {
		// echo "Database Connected";
	}
	else
	{
		header("Location: ../config/db_connection.php");
	}

	if (!$_SESSION['username'] || !$_SESSION['admin_id']) {
		header('Location: admin-login.php');
	}
 ?>