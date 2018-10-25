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
    echo "Error: " . $ex->getMessage();
    die();
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Scripture Add</title>
  </head>

  <body>
    <div>
      <h1>Scripture Adding</h1>
      <form action="#" method="post">
        <input type="text" name="book" id="book" /> - Book<br />
        <input type="text" name="chapter" id="chapter" /> - Chapter<br />
        <input type="text" name="verse" id="verse" /> - Verse<br />
        <input type="textarea" name="content" id="content" /> - Content<br />
        
        <?php
          foreach ($db->query('SELECT name FROM topic') as $row)
          {
            $name = $row['name'];
            echo "<input type='checkbox' name='" . $name . "'>" . $name . "<br />";
          }
        ?>
        
        <input type="submit" name="addScripture" id="addScripture" />
      </form>
      
      <?php
        if (isset($_POST["addScripture"]))
        {
          $db->query('INSERT INTO scripture (book, chapter, verse, content) VALUES (\'' . $_POST['book'] . '\', \'' . $_POST['chapter'] . '\', \'' . $_POST['verse'] . '\', \'' . $_POST['content'] . '\');');
        }
      ?>
      
    </div>
  </body>
</html>