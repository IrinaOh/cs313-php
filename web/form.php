<?php 
	session_start();
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Form Page</title>
</head>
<body>
	<form action="/submitted-form.php" method="post">
		<label>Name:</label>
		<input type="text" name="name" value="name"><br>
		<label>Email:</label>
		<input type="text" name="email" value="email"><br>
		<label>Major:</label>
		<input type="radio" name="major" value="cs">CS
		<input type="radio" name="major" value="wdd">WDD
		<input type="radio" name="major" value="cit">CIT
		<input type="radio" name="major" value="ce">CE
		<br>
		<label>Comments:</label>
		<input type="text-area" name="comments" value=""><br>
		<input type="submit" name="submit">
	</form>
</body>
</html>