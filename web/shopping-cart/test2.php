<?php  
	session_start();
	$test = $_SESSION['test'];
	$street = $_SESSION['street'];
	$city = $_SESSION['city'];
	$state = $_SESSION['state'];
	$zip = $_SESSION['zip'];
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h5>Shipping address is : <?php echo $test; ?></h5>
	<?php 
	echo $street; 
	echo $city;
	echo $state;
	echo $zip;

	?>
</body>
</html>