<?php
	session_start();

	if (isset($_POST['logout_btn'])) {
		session_destroy(); 
		//var_dump($_SESSION);
		unset($_SESSION['username']);
		header('Location: admin-login.php');
	}
?>