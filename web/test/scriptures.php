<?php
  require ('dbConnect.php');
  $db = get_db();

  $query = 'SELECT s.book, s.chapter, s.verse, s.content, t.name FROM scripture_topic st JOIN topic t ON st.topic_id = t.topic_id; JOIN scripture s ON st.scripture_id = s.scripture_id';
  $stmt = $db->prepare($query);
  $stmt->execute();
  $scriptures_topics = $stmt->fetchAll(PDO::FETCH_ASSOC); //acts like a loop
?>
<!doctype html>
<head>
	<title>Scripture List</title>
</head>
<body>
	<h1>Scriptures List by Topic</h1>
  <ul>
    <?php
      foreach ($scriptures as $scripture) {
        $scripture_id = $scriptures_topics['scripture_id'];
        $book = $scriptures_topics['book'];
        $chapter = $scriptures_topics['chapter'];
        $verse = $scriptures_topics['verse'];
        $content = $scriptures_topics['content'];
        $topic = $scriptures_topics['name']
        echo '<li><p>'.$book.' '.$chapter.' '.'</p></li>';
      }
    ?>
  </ul>
</body>
</html>
