<?php  
	session_start();
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
	<h5>Shipping address is : <?php echo $street; ?></h5>
</body>
</html>