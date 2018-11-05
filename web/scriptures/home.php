<?php
	session_start();
	
	if (isset($_SESSION['username']))
	{
		$user = $_SESSION['username'];
	}
	else
	{
		header('Location: signin.php');
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Home</title>
	</head>

	<body>
		<a href="signout.php">Sign Out</a>
		<div>
			<h1>Welcome <?php echo $user; ?></h1>
		</div>
	</body>
</html>