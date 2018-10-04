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
		<?php  
			$majors = array("Computer Science"=>"cs", 
				"Web Design and Development"=>"wdd", 
				"Computer Information Tehnology" => "cit",
				"computer Engeneering" => "ce");
			foreach ($majors as $m => $m_code) {
				print "<input type=\"radio\" name=\"major\" value=\"" . $m . "\" id=\"" . $m_code . "\"><label for=\"" . $m_code . "\">" . $m . "</label><br />";
			}	
		?>
<!-- 		<input type="radio" name="major" value="cs">CS
		<input type="radio" name="major" value="wdd">WDD
		<input type="radio" name="major" value="cit">CIT
		<input type="radio" name="major" value="ce">CE -->

		<br>
		<label>Comments:</label>
		<textarea name="comments"></textarea></br></br>
        <input type="checkbox" name="continent[]" value="na">North America</br>
        <input type="checkbox" name="continent[]" value="sa">South America</br>
        <input type="checkbox" name="continent[]" value="eu">Europe</br>
        <input type="checkbox" name="continent[]" value="as">Asia</br>
        <input type="checkbox" name="continent[]" value="au">Austrailia</br>
        <input type="checkbox" name="continent[]" value="af">Africa</br>
        <input type="checkbox" name="continent[]" value="an">Antarctica</br>
		<input type="submit" name="submit">
	</form>
</body>
</html>