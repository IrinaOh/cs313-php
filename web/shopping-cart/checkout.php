<?php session_start(); ?>

<a href="shopping-cart.php">Back to Shopping Cart</a>
<form class="" action="confirmation.php" method="post">
  <p>Add your shipping address:</p>
  Street:<input type="text" name="street" value="">
  City:<input type="text" name="city" value="">
  Zip:<input type="number" name="zip" value="">

  <input type="submit" name="submit" value="Confirm Purchase">
</form>