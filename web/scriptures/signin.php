<?php
	session_start();

	$badLogin = false;
// First check to see if we have post variables, if not, just
// continue on as always.
// if (isset($_POST['txtUser']) && isset($_POST['txtPassword']))
// {
	// they have submitted a username and password for us to check
	$username = $_POST['username'];
	$password = $_POST['password'];
	// Connect to the DB
	require("dbConnect.php");
	$db = get_db();
	$query = 'SELECT account_password FROM account WHERE account_username=:username';
	$stmt = $db->prepare($query);
	$stmt->bindValue(':username', $username);
	$result = $stmt->execute();
	// if ($result)
	// {
		// $row = ;
		// $hashedPasswordFromDB = $stmt->fetch('account_password');
		// // now check to see if the hashed password matches
		// if (password_verify($password, $hashedPasswordFromDB))
		// {
			// password was correct, put the user on the session, and redirect to home
			$_SESSION['username'] = $username;
			header("Location: home.php");
			die(); // we always include a die after redirects.
		// }
		// else
		// {
		// 	$badLogin = true;
		// }
	// }
	// else
	// {
	// 	$badLogin = true;
	// }
// }
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Sign In</title>
	</head>

	<body>
		<div>
			<h1>Enter Account Information</h1>
			<form action="signin.php" method="post">
				
				<input type="text" name="username" id="username" placeholder="Username" />
				<br /><br />
				
				<input type="password" name="password" id="password" placeholder="Password" />
				<br /><br />
				
				<input type="submit" value="Sign In" />
			</form>
		</div>
	</body>
</html>