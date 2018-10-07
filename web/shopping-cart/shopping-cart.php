<?php session_start(); ?>

<?php
  $product1 = $_POST["product1"]; //how to transfer product and its quantity?
  $product2 = $_POST["product2"];
  $product3 = $_POST["product3"];
?>

<html>
<body>

<p>Product1: <?=$product1 ?></p><br>
<p>Product2: <?=$product2 ?></p><br>
<p>Product3: <?=$product3 ?></p><br>

<?php
	$productsDB = array("001"=>"Product 1",
						"002"=>"Product 2",
						"003"=>"Product 3");
	foreach ($_SESSION["cart"] as $p){
		print "$productsDB[$p]";
		print "$_SESSION["cart"][$p] <br />";
	}
?>
<p>Remove all items from the cart:</p> <?php session_unset(); ?>

<a href="product.php">BACK TO SHOPPING</a>
<a href="checkout.php">PROCEED TO CHECKOUT</a>
</body>
</html>