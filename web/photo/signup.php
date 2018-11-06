<?php
	session_start();
	
	if (isset($_SESSION['passwordsMatch']))
	{
		if (!$_SESSION['passwordsMatch'])
		{
			echo '<p style="color: red;">Please make sure the passwords match.</p>';
			$match = false;
		}
	}
	
	if (isset($_SESSION['properPass']))
	{
		if (!$_SESSION['properPass'])
		{
			echo '<p style="color: red;">Passwords must be 7 characters long and contain at least 1 number.</p>';
			$proper = false;
		}
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<?php include('head.php'); ?>
		<title>Sign Up</title>
	</head>

	<body>
		<?php include('header.php'); ?>
		<div>
			<h1>Enter Account Information</h1>
			<form action="createAccount.php" method="post">
				
				<input type="text" name="username" id="username" placeholder="Username" required />
				<br /><br />
				
				<input type="password" name="password" id="password" placeholder="Password" required /> 
				<?php if ($match == false) echo '***' ?>
				<br /><br />
				
				<input type="password" name="passwordConfirm" id="passwordConfirm" placeholder="Confirm Your Password" required />
				<?php if ($match == false) echo '***' ?>
				<br /><br />
				
				<input type="submit" value="Create Account" />
			</form>
		</div>
		<?php include('footer.php'); ?>
	</body>
</html>