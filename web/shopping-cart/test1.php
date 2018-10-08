<?php 
	if(isset($_POST['submit'])){
		session_start(); 
		$_SESSION['myValue']=3;	
		// $SESSION['test'] = "test";
		// $SESSION['street'] = htmlentities($_SESSION['street']);
		// $SESSION['city'] = htmlentities($_POST['city']);
		// $SESSION['state'] = htmlentities($_POST['state']);
		// $SESSION['zip'] = htmlentities($_POST['zip']);
		header('Location: test2.php');
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<input type="text" name="street" placeholder="Enter Street"><br>
		<input type="text" name="city" placeholder="Enter City"><br>
		<input type="text" name="state" placeholder="Enter State"><br>
		<input type="text" name="zip" placeholder="Enter Zip"><br>
		<input type="submit" name="submit" value="submit">
	</form>
</body>
</html>