<?php
	$id = $_GET['id'];
?>

<?php
try
{
  $dbUrl = getenv('DATABASE_URL');

  $dbOpts = parse_url($dbUrl);

  $dbHost = $dbOpts["host"];
  $dbPort = $dbOpts["port"];
  $dbUser = $dbOpts["user"];
  $dbPassword = $dbOpts["pass"];
  $dbName = ltrim($dbOpts["path"],'/');

  $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $ex)
{
  echo 'Error!: ' . $ex->getMessage();
  die();
}
?>


<!doctype html>
<head>
	<title>Photo Finder</title>
</head>
<body>
	<h1> Photo Session Details </h1>
	<?php
		foreach ($db->query('SELECT * FROM photoshoot WHERE photoshoot_id='.$id) as $p)
		{
		    $id = $p['photoshoot_id'];
		    $type = $p['photoshoot_type'];
		    $length = $p['photoshoot_length'];
		    $number_of_people = $p['photoshoot_number_of_people'];
		    $number_of_outfits = $p['photoshoot_number_of_outfits'];
			echo "<p><b>" . $type . "</b> length: " . $length . " hour, up to " . $number_of_people . " people, " . $number_of_outfits . " outfits</p>";

		}
		// $getAddress = $db->prepare("SELECT * FROM address ORDER BY address_id ASC");
		//   $getAddress->execute();
		//   $addressArray = $getAddress->fetchAll();
		//   foreach ($addressArray as $address){
		//         echo $address['street'] . ", " . $address['city'] . ", " . $address['zip'] . ", " . $address['country'] . "<br>";
		//   }

		// foreach ($db->query("SELECT * FROM photoshoot WHERE photoshoot_id='$book'" as $row)

		// $stmt = $db->prepare('SELECT * FROM photoshoot WHERE photoshoot_id=:$id');
		// $stmt->bindValue(':photoshoot_id', $id, PDO::PARAM_INT);
		// $stmt->bindValue(':photoshoot_type', $type, PDO::PARAM_INT);
		// $stmt->bindValue(':photoshoot_length', $length, PDO::PARAM_INT);
		// $stmt->bindValue(':photoshoot_number_of_people', $number_of_people, PDO::PARAM_INT);
		// $stmt->execute();
		// $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
		// 	echo "<p><b>" . $type . " ";
		// 	echo $length . "hour, ";
		// 	echo "up to " . $number_of_people . " people</b>";
		// 	echo '</p>';
	?>



</body>
</html>