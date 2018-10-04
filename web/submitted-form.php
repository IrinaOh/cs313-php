
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
	$name = $_POST["name"];
	$email = $_POST["email"];
	$major = $_POST["major"];
	$comments = $_POST["comments"];
	echo  "$name <br>";
	echo "<a href='mailto:" . $email . "'>";
	echo  "$name <br>";
	echo  "$name <br>";
?>

</body>
</html>