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
<html>
<head>
	<title>Scripture Form</title>
</head>
<body>
	<h1>Add New Scriptures</h1>
<!--     <?php
      <ul>
        <form name="insert" action="insert.php" method ="POST">
          <li>Book: <input type="text" name="book"></li>
          <li>Chapter: <input type="text" name="chapter"></li>
          <li>Verse: <input type="text" name="verse"></li>
          <li>Content: <input type="textarea" name="content"></li>
          // <li>Topic: 
          //   foreach ($db->query('SELECT name FROM topic') as $row)
          //     {
          //       $name = $row['name'];
          //       echo "<input type='checkbox' name='" . $name . "' value='" . $name . "'><br>";
          //   }
           
          // </li>
          <li><input type="submit" name="submit" value="submit"></li>
        </form>
      </ul>
    ?> -->
</body>
</html>
