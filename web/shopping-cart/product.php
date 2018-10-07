<?php
  session_start();
  if (isset($_SESSION["cart"]) < 1) {
    $_SESSION["cart"] = array();
  }
  $_SESSION["product1"] = $_POST["product1"];
   $_SESSION["product2"] = $_POST["product2"];
   $_SESSION["product3"] = $_POST["product3"];
  print($_SESSION["product1"])
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="">
      <p>Product 1</p>
      <form class="" action="product.php" method="post">
        <input type="hidden" name="product1">
        <input type="submit" name="submit" value="Add to Cart">
      </form>
    </div>
    <div class="">
      <p>Product 2</p>
      <form class="" action="product.php" method="post">
        <input type="hidden" name="product2">
        <input type="submit" name="submit" value="Add to Cart">
      </form>
    </div>
    <div class="">
      <p>Product 3</p>
      <form class="" action="product.php" method="post">
        <input type="hidden" name="product3">
        <input type="submit" name="submit" value="Add to Cart">
      </form>
    </div>
    <a href="shopping-cart.php">SEE SHOPPING CART</a>
  </body>
</html>