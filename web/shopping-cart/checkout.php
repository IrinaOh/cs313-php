<?php 
	if(isset($_POST['submit'])){
		session_start(); 
		$_SESSION['street'] = htmlentities($_POST['street']);
		$_SESSION['city'] = htmlentities($_POST['city']);
		$_SESSION['state'] = htmlentities($_POST['state']);
		$_SESSION['zip'] = htmlentities($_POST['zip']);
		header('Location: confirmation.php');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h3>Enter your shipping address here:</h3>
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<input type="text" name="street" placeholder="Enter Street"><br>
		<input type="text" name="city" placeholder="Enter City"><br>
		<input type="text" name="state" placeholder="Enter State"><br>
		<input type="text" name="zip" placeholder="Enter Zip"><br>
		<input type="submit" name="submit" value="submit">
	</form>
</body>
</html>