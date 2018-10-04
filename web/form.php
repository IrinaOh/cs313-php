<?php 
	session_start();
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Form Page</title>
</head>
<body>
	<form action="/form-submitted.php">
		<label>Name:</label>
		<input type="text" name="name" value="name">
		<label>Email:</label>
		<input type="text" name="email" value="email">
		<label>Major:</label>
		<input type="radio" name="major" value="cs">
		<input type="radio" name="major" value="wdd">
		<input type="radio" name="major" value="cit">
		<input type="radio" name="major" value="ce">
		<label>Comments:</label>
		<input type="text-area" name="comments" value="">
	</form>
</body>
</html>