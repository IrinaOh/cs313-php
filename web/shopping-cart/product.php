<?php 
	if(isset($_POST['submit'])){
		session_start(); 
		$_SESSION['salt'] = htmlentities($_POST['salt']);
		$_SESSION['pepper'] = htmlentities($_POST['pepper']);
		$_SESSION['rosemary'] = htmlentities($_POST['rosemary']);
		$_SESSION['cumin'] = htmlentities($_POST['cumin']);
		header('Location: shopping-cart.php');
	}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  	<h2>Welcome to the spices shop.</h2>
  	<h4>Pick your spices:</h4>
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<input type="checkbox" name="salt" value="salt"> Salt<br>
		<input type="pepper" name="pepper" value="pepper"> Pepper<br>
		<input type="rosemary" name="rosemary" value="rosemary"> Rosemary<br>
		<input type="cumin" name="cumin" value="cumin"> Cumin<br>
		<input type="submit" name="submit" value="submit">
	</form>
  </body>
</html>