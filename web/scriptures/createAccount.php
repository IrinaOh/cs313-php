<?php
	session_start();

	$user = $_POST['username'];
	$pass = $_POST['password'];

	require('dbConnect.php');
	$db = get_db();
	

	// $passConfirm = $_POST['passwordConfirm'];
	
	// if ($pass != $passConfirm)
	// {
	// 	$_SESSION['passwordsMatch'] = false;
	// 	header('Location: signup.php');
	// }
	// else if (1 === preg_match('~[0-9]~', $pass) && strlen($pass) >= 7)
	// {
		$hashedPass = password_hash($pass, PASSWORD_DEFAULT);
		$query = 'INSERT INTO account(account_username, account_password) VALUES (:user, :pass);';
		$stmt = $db->prepare($query);
		$stmt->bindValue('user', $user, PDO::PARAM_STR);
		$stmt->bindValue('pass', $hashedPass, PDO::PARAM_STR);
		$stmt->execute();
	
		header('Location: signin.php');
	// }
	// else
	// {	
	// 	$_SESSION['properPass'] = false;
	// 	header('Location: signup.php');
	// }
?>