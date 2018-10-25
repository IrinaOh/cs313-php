<?php
  require ('dbConnect.php');
  $db = get_db();

  //$query = 'SELECT s.book, s.chapter, s.verse, s.content, t.name FROM scripture s JOIN topic t ON s.topic_id = t.topic_id';
  // $stmt = $db->prepare($query);
  // $stmt->execute();
  // $scriptures_topics = $stmt->fetchAll(PDO::FETCH_ASSOC); //acts like a loop
?>
<!doctype html>
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
          <li>Topic: 
            foreach ($db->query('SELECT name FROM topic') as $row)
              {
                $name = $row['name'];
                echo "<input type='checkbox' name='" . $name . "' value='" . $name . "'><br>";
            }
           
          </li>
          <li><input type="submit" name="submit" value="submit"></li>
        </form>
      </ul>
    ?> -->
</body>
</html>
