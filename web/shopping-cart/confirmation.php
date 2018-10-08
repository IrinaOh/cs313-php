<?php  
	session_start();
	$salt = $_SESSION['salt'];
	$pepper = $_SESSION['pepper'];
	$rosemary = $_SESSION['rosemary'];
	$cumin = $_SESSION['cumin'];
	$street = $_SESSION['street'];
	$city = $_SESSION['city'];
	$state = $_SESSION['state'];
	$zip = $_SESSION['zip'];
	print_r($_SESSION);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h3>Your order contains:</h3>
	<?php 
	echo $salt; 
	echo $pepper;
	echo $rosemary;
	echo $cumin;

	?>
	<h5>Shipping address is:</h5>
	<?php 
	echo $street; 
	echo $city;
	echo $state;
	echo $zip;

	?>
</body>
</html>
