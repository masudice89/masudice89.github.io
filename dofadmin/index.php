<?php
	session_start();

	if (!$_SESSION['username']) {
		header('Location: admin-login.php');
	}
	else
	{
		header('location: admin-dashboard.php');
	}
 ?>