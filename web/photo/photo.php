<?php
  $_GET['id'] = $id; 
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
  <title>Photoshoot Finder</title>
</head>
<body>
  <h1> Photo Sessions </h1>
  <?php
  foreach ($db->query('SELECT photoshoot_id, photoshoot_type FROM photoshoot') as $p)
  {
    $id = $p['photoshoot_id'];
    $type = $p['photoshoot_type'];
    echo "<p><a href='session-detail.php?id=$id'>" . $type . "</a></p>";
  }
  ?>

</body>
</html>