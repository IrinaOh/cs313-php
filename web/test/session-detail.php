<?php
	if(!isset($_GET['photoshoot_id'])){
		die("Error, photoshoot id is not specified...");
	}
	$photoshoot_id = htmlspecialchars($_GET['photoshoot_id']);
?>
<?php
require('dbConnect.php');
$db = get_db();

//check if this query works in sql
$query = 'SELECT p.photoshoot_type, p.photoshoot_length, p.photoshoot_number_of_people, p.photoshoot_number_of_images, p.photoshoot_number_of_outfits, f.feedback_content FROM feedback f JOIN photoshoot p ON f.feedback_photoshoot_id = p.photoshoot_id WHERE p.photoshoot_id='.$photoshoot_id;
$stmt = $db->prepare($query);
// $stmt->bindValue(':p.photoshoot_id', $photoshoot_id, PDO::PARAM_INT);
$stmt->execute();

$photoshoots = $stmt->fetchAll(PDO::FETCH_ASSOC);
$photoshoot_type = $photoshoots[0]['p.photoshoot_type'];
?>

<!doctype html>
<head>
	<title>Photoshoot Details</title>
</head>
<body>
	<h1> <?php echo $photoshoot_type; ?>Photo Session Details </h1>
	<?php

	    $id = $photoshoots['photoshoot_id'];
	    $type = $photoshoots['photoshoot_type'];
	    $length = $photoshoots['photoshoot_length'];
	    $people = $photoshoots['photoshoot_number_of_people'];
		$images = $photoshoots['photoshoot_number_of_images'];
	    $outfits = $photoshoots['photoshoot_number_of_outfits'];
	    $feedback = $photoshoots['feedback_content'];

		echo "<p><b>" . $type . "</b> length: " . $length . " hour,<br> up to " . $people . " people,<br> " . $images . " images,<br> " . $outfits . " outfits</p>";
		echo = "<h2>Customer Feedback:</h2>" . <?php foreach($photoshoots as $p){echo "<p>" . $feedback . "</p>";};?>
	
	<?php

	?>
	<h2>Leave Your Feedback:</h2>
	<form method="post" action="insert_feedback.php">
		<input type="hidden" name="feedback_photoshoot_id" value="<?php echo $photoshoot_id;?>">
		<input type="textarea" name="feedback_content">
		<input type="submit" name="" value="Leave Comment">
	</form>
</body>
</html>
