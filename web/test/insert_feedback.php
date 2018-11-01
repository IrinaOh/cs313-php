<?php
  $feedback_photoshoot_id = htmlspecialchars($_POST['feedback_photoshoot_id']);
  $content = htmlspecialchars($_POST['feedback_content']);

  //this is test to make sure it works.
  //can remove if it does
  echo "$feedback_photoshoot_id\n";
  echo "$content";

  require('dbConnect.php');
  $db = get_db();

  $query = 'INSERT INTO feedback(feedback_photoshoot_id, feedback_content) VALUES (:feedback_photoshoot_id, :content);';
  $stmt = $db->prepare($query);
  $stmt->bindValue(':feedback_photoshoot_id', $feedback_photoshoot_id, PDO::PARAM_INT);
  $stmt->bindValue(':content', $content, PDO::PARAM_STR);
  $stmt->execute();

  $new_page = "session-detail.php?photoshoot_id=$feedback_photoshoot_id";
  header("Location: $new_page");
  die();
?>
