<?php
	$id = $_GET['id'];
?>
<?php require('dbConnect.php'); ?>
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
	?>
	<form method="post" action="insert_photoshoot.php">
		<input type="hidden" name="photoshoot_id" value="<?php echo $id;?>">
		<input type="text" name="photoshoot_type">
		<input type="text" name="photoshoot_length">
		<input type="text" name="photoshoot_number_of_people">
		<input type="text" name="photoshoot_number_of_outfits">
		<input type="submit" name="" value="Create New Photoshoot Option">
	</form>
</body>
</html>
