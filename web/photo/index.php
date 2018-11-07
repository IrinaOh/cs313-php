<?php
  session_start();
  
  if (isset($_SESSION['username']))
  {
    $user = $_SESSION['username'];
  }
  // else
  // {
  //   header('Location: signin.php');
  // }
?>
<?php
  $_GET['photoshoot_id'] = $photoshoot_id;

  require('dbConnect.php');
  $db = get_db();

  $query = 'SELECT photoshoot_id, photoshoot_type, photoshoot_length, photoshoot_number_of_people, photoshoot_number_of_images, photoshoot_number_of_outfits FROM photoshoot';
  $stmt = $db->prepare($query);
  $stmt->execute();
  $photoshoots = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!doctype html>
<head>
  <?php include('head.php'); ?>
  <?php  
    if (isset($_SESSION['username']))
    {
      echo "<a href='signout.php'>Sign Out</a>";
      echo "Welcome" . $user;
    }
  ?>
  <h1><?php echo "Welcome" . $user; ?></h1>
  <title>Photoshoots</title>
</head>
<body>
  <?php include('header.php'); ?>
  <h1> Photo Sessions </h1>
  <main>
    <?php
    foreach ($photoshoots as $p)
    {
      $photoshoot_id = $p['photoshoot_id'];
      $type = $p['photoshoot_type'];
      echo "<p class='photoshooot'><a href='session-detail.php?photoshoot_id=$photoshoot_id'>" . $type . "</a></p>";
    }
    ?>
  </main>
  <?php include('footer.php'); ?>
</body>
</html>
