<?php session_start(); ?>
<?php
  $street = $_SESSION["street"];
  $city = $_SESSION["city"];
  $zip = $_SESSION["zip"];
?>
<p>Purchased products:</p><br>
	<?php
		$productsDB = array("001"=>"Product 1",
							"002"=>"Product 2",
							"003"=>"Product 3");
		foreach ($continents as $c){
			print "$continentsDB[$c] <br />";
		}
	?>
</p>


<?php
  foreach ($cart as $p){
    print "$cart[$p] <br />";
  }
 ?>
<p>Shipping to:</p><br>
<p>Street: <?=$street ?></p><br>
<p>City: <?=$city ?></p><br>
<p>Zip: <?=$zip ?></p><br>