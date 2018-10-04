
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
	$continents = $_POST["continent"];
	echo  "$name <br>";
	echo "<a href='mailto:" . $email . "'>";
	echo  "$major <br>";
	echo  "$comments <br>";
?>
<html>
<body>
<p>Name: <?=$name ?></p>
<p>Email: <a href="mailto:<?=$email ?>"><?=$email ?></a></p>
<p>Major: <?=$major ?></p>
<p>Comments: <?=$comments ?></p>
<p>Continents:</br>
	<?php
		$continentsDB = array("na"=>"North America", 
							"sa"=>"South America",
							"eu"=>"Europe",
							"as"=>"Asia",
							"au"=>"Australia",
							"af"=>"Africa",
							"an"=>"Antartica");
		foreach ($continents as $c){
			print "$continentsDB[$c] <br />";
		}
	?>
</p>

</body>
</html>