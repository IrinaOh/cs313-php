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
		foreach ($db->query('SELECT * FROM photoshoot WHERE photoshoot_id=$id') as $p)
		{
			echo "<p><b>" . $p['photoshoot_type'] . " ";
			echo $p['photoshoot_length'] . "hour";
			echo "up to " . $p['photoshoot_number_of_people'] . " people</b> - ";
			echo '</p>';
		}
		// $stmt = $db->prepare('SELECT * FROM photoshoot WHERE id=:photoshoot_id');
		// $stmt->bindValue(':photoshoot_id', $id, PDO::PARAM_INT);
		// $stmt->execute();
		// $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
	?>



</body>
</html>