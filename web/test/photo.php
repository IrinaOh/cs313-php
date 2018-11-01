<?php
  $_GET['photoshoot_id'] = $photoshoot_id;
  $_GET['photoshoot_type'] = $type;

  require('dbConnect.php');
  $db = get_db();

  $query = 'SELECT photoshoot_id, photoshoot_type, photoshoot_length, photoshoot_number_of_people, photoshoot_number_of_images, photoshoot_number_of_outfits FROM photoshoot';
  $stmt = $db->prepare($query);
  $stmt->execute();
  $photoshoots = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!doctype html>
<head>
  <title>Photoshoots</title>
</head>
<body>
  <h1> Photo Sessions </h1>
  <?php
  foreach ($photoshoots as $p)
  {
    $photoshoot_id = $p['photoshoot_id'];
    $type = $p['photoshoot_type'];
    echo "<p><a href='session-detail.php?photoshoot_id=$photoshoot_id'>" . $type . "</a></p>";
  }
  ?>
</body>
</html>
