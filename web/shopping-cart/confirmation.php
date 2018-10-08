<?php session_start(); ?>

<p>Purchased products:</p><br>
	<?php
		$productsDB = array("001"=>"Product 1",
							"002"=>"Product 2",
							"003"=>"Product 3");
		foreach ($cart as $c){
			print "$productsDB[$c] <br />";
		}
	?>
</p>


<?php
  	$street = $_SESSION["street"];
	$city = $_SESSION["city"];
	$zip = $_SESSION["zip"];
 ?>
<p>Shipping to:</p><br>
<p>Street: <?=$street ?></p><br>
<p>City: <?=$city ?></p><br>
<p>Zip: <?=$zip ?></p><br>