<?php
  $book = htmlspecialchars($_POST['book']);
  //continue with other variables

  require ('dbConnect.php');
  $db = get_db();

  $query = 'SELECT s.book, s.chapter, s.verse, s.content, t.name FROM scripture_topic st JOIN topic t ON st.topic_id = t.topic_id; JOIN scripture s ON st.scripture_id = s.scripture_id';
  $stmt = $db->prepare($query);
  $stmt->execute();
  $scriptures_topics = $stmt->fetchAll(PDO::FETCH_ASSOC); //acts like a loop
?>
