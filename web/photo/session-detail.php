<?php
	session_start();
	$id = $_SESSION['sid'];
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
		foreach ($db->query('SELECT * FROM photoshoot where photoshoot_id = <?php echo $id ?>') as $p)
		{
			echo "<p><b>" . $p['photoshoot_type'] . " ";
			echo $p['photoshoot_length'] . "hour";
			echo "up to " . $p['photoshoot_number_of_people'] . " people</b> - ";
			echo '</p>';
		}
	?>

<!-- 	<form action="" method ="post" id="searchForm">
		<input type="text" name="search">
		<input type="submit" name="submit" value="Search">
	</form> -->



</body>
</html>