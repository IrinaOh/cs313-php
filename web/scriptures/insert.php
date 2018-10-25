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