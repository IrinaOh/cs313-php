<?php
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Sign In</title>
	</head>

	<body>
		<div>
			<h1>Enter Account Information</h1>
			<form action="signinAccount.php" method="post">
				
				<input type="text" name="username" id="username" placeholder="Username" />
				<br /><br />
				
				<input type="password" name="password" id="password" placeholder="Password" />
				<br /><br />
				
				<input type="submit" value="Sign In" />
			</form>
		</div>
	</body>
</html>