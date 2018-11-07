<?php
	if(!isset($_GET['photoshoot_id'])){
		die("Error, photoshoot id is not specified...");
	}
	$photoshoot_id = htmlspecialchars($_GET['photoshoot_id']);
;

	require('dbConnect.php');
	$db = get_db();

	// $query = 'SELECT p.photoshoot_type, p.photoshoot_length, p.photoshoot_number_of_people, p.photoshoot_number_of_images, p.photoshoot_number_of_outfits, f.feedback_content FROM feedback f JOIN photoshoot p ON f.feedback_photoshoot_id = p.photoshoot_id WHERE p.photoshoot_id='.$photoshoot_id;


	//join query didn't work for me because it repeated photoshoot details information as many times as how many feedbacks were left for that photoshoot(if 0 than details were not displayed at all). 
	$query = 'SELECT * FROM photoshoot WHERE photoshoot_id='.$photoshoot_id;
	$query1 = 'SELECT * FROM feedback WHERE feedback_photoshoot_id='.$photoshoot_id;

	$stmt = $db->prepare($query);
	$stmt1 = $db->prepare($query1);
	// $stmt->bindValue(':p.photoshoot_id', $photoshoot_id, PDO::PARAM_INT);
	$stmt->execute();
	$stmt1->execute();

	$photoshoots = $stmt->fetchAll(PDO::FETCH_ASSOC);
	$feedbacks = $stmt1->fetchAll(PDO::FETCH_ASSOC)
	// $photoshoot_type = $photoshoots[0]['p.photoshoot_type'];
?>

<!doctype html>
<head>
	<?php include('head.php'); ?>
	<title>Photoshoot Details</title>
</head>
<body>
	<?php include('header.php'); ?>
	<?php
	foreach ($photoshoots as $p) 
	{

		$id = $p['photoshoot_id'];
	    $type = $p['photoshoot_type'];
	    $length = $p['photoshoot_length'];
	    $people = $p['photoshoot_number_of_people'];
		$images = $p['photoshoot_number_of_images'];
	    $outfits = $p['photoshoot_number_of_outfits'];

	    echo "<h1>".$type." Details</h1>";

		echo "<p>length: " . $length . " hour,<br> up to " . $people . " people,<br> " . $images . " images,<br> " . $outfits . " outfits</p>";
	}
	?>
	<h2>Customer Feedback:</h2>
	<?php
		foreach($feedbacks as $f)
		{
		    $feedback = $f['feedback_content'];

			echo "<p>" . $feedback . "</p>";
		}
	?>
	<h2>Leave Your Feedback:</h2>
	<form method="post" action="insert_feedback.php" class="contact-form">
		<div class="form-element">
			<input type="hidden" name="feedback_photoshoot_id" value="<?php echo $photoshoot_id;?>" class="form-control" >
		</div>
		<div class="form-textarea">
			<input type="textarea" name="feedback_content" class="form-control" >
		</div>
		<div class="form-element form-btn">
			<input type="submit" name="" value="Leave Comment" class="btn btn-lg btn-success btn-block">
		</div>
	</form>
	<?php include('footer.php'); ?>
</body>
</html>
