<?php  
	session_start();
	$salt = $_SESSION['salt'];
	$pepper = $_SESSION['pepper'];
	$rosemary = $_SESSION['rosemary'];
	$cumin = $_SESSION['cumin'];
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h5>Items in your shopping cart:</h5>
	<?php 
	echo $salt; 
	echo $pepper;
	echo $rosemary;
	echo $cumin;

	?>
	<a href="product.php">BACK TO SHOPPING</a>
	<a href="checkout.php">PROCEED TO CHECKOUT</a>
</body>
</html>