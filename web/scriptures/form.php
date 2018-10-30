<?php

  require ('dbConnect.php');
  $db = get_db();

?>
<!doctype html>
<html>
<head>
	<title>Scripture Form</title>
</head>
<body>
	<h1>Add New Scriptures</h1>
  <form action="insert.php" method ="POST">
    Book: <input type="text" name="book"/></br>
    Chapter: <input type="text" name="chapter"/></br>
    Verse: <input type="text" name="verse"/></br>
    Content: <input type="textarea" name="content"/></br>
    Topic:
    <?php  
    foreach ($db->query('SELECT name FROM topic') as $row)
    {
      $name = $row['name'];
      echo "<input type = 'checkbox' name= 'topic' value=" . $name . ">". $name ."</br>"
      ;
    }
    ?>
    <input type="submit" name="submit" value="submit"/>
  </form>
</body>
</html>
