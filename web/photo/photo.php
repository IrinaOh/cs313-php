<?php
if(isset($_GET['id'])){
  $photoshoot_id = $_GET['photoshoot_id'];
  echo $photoshoot_id;
} else {
  echo "failed";
}
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
	<h1> Photo Sessions </h1>
	<?php
		foreach ($db->query('SELECT photoshoot_type FROM photoshoot') as $p)
		{
			echo "<p><a href='session-detail.php?id=" . $p['photoshoot_id'] . "'>" . $p['photoshoot_type'] . "</a></p>";
		}
	?>

<!-- 	<form action="" method ="post" id="searchForm">
		<input type="text" name="search">
		<input type="submit" name="submit" value="Search">
	</form> -->



</body>
</html>