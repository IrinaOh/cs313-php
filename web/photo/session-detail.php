<?php
	$id = $_GET['id'];
	echo $id;
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
		foreach ($db->query('SELECT * FROM photoshoot WHERE photoshoot_id="$id"') as $p)
		{
		    $id = $p['photoshoot_id'];
		    $type = $p['photoshoot_type'];
		    $length = $p['photoshoot_length'];
		    $number_of_people = $p['photoshoot_number_of_people'];
			echo "<p><b>" . $type . " ";
			echo $length . "hour, ";
			echo "up to " . $number_of_people . " people</b>";
			echo '</p>';
		}


		// $stmt = $db->prepare('SELECT * FROM photoshoot WHERE id=:photoshoot_id');
		// $stmt->bindValue(':photoshoot_id', $id, PDO::PARAM_INT);
		// $stmt->execute();
		// $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
	?>



</body>
</html>