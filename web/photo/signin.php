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
	$stmt->bindValue('username', $username);
	$stmt->execute();
	// if ($result)
	// {
		$row = $stmt->fetch();
		$hashedPasswordFromDB = $row['account_password'];
		// now check to see if the hashed password matches
		if (password_verify($password, $hashedPasswordFromDB))
		{
			// password was correct, put the user on the session, and redirect to home
			$_SESSION['username'] = $username;
			header("Location: home.php");
			die(); // we always include a die after redirects.
		}
		else
		{
			$badLogin = true;
		}
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
		<?php include('head.php'); ?>
		<title>Sign In</title>
	</head>

	<body>
		<?php include('header.php'); ?>
		<div>
			<h1>Enter Account Information</h1>
			<form action="signin.php" method="post" class="contact-form">
				<div class="form-element">
					<input type="text" name="username" id="username" placeholder="Username" class="form-control"/>
				</div>
				<div class="form-element">	
					<input type="password" name="password" id="password" placeholder="Password" class="form-control"/>
				</div>
				<div class="form-element">	
					<input type="submit" value="Sign In" />
				</div>
			</form>
		</div>
		<?php include('footer.php'); ?>
	</body>
</html>