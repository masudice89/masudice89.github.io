<?php 
	require_once("admin-security.php");


	if (isset($_POST['login_btn'])) {
		$email = $_POST['email'];
		$password = $_POST['password'];
		//var_dump($email);
		
		$query_login = "SELECT * FROM register WHERE email='$email' AND password='$password'";
		$result_login = mysqli_query($connection,$query_login);
		$row_login = mysqli_fetch_array($result_login,MYSQLI_ASSOC);
		//var_dump($row_login);
		
		if ($row_login['usertype'] == 'admin') {
			$_SESSION['username'] = $row_login['username'];
			$_SESSION['admin_id'] = $row_login['id'];
			header('Location: admin-dashboard.php');
		}
		elseif ($row_login['usertype'] == 'user') {
			$_SESSION['username'] = $row_login['username'];
			$_SESSION['admin_id'] = $row_login['id'];
			header('Location: ../index.php');
		}
		else{
			
			//$_SESSION['status'] = "Email id or Password is invalid.";
			//header('Location: login.php');
			echo "<script>alert('লগইন আইডি অথবা পাসওয়ার্ড ভুল হয়েছে')</script>";
		}
	}