<?php
  session_start();
  if (isset($_SESSION["cart"]) < 1) {
    $_SESSION["cart"] = array();
  }
  $_SESSION["cart"][$_POST["product"]] += $_POST["qty"];
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
        <input type="hidden" name="product" value="001">
        Quantity: <input type="number" name="qty" min="1" max="10" value="">
        <input type="submit" name="submit" value="Add to Cart">
      </form>
    </div>
    <div class="">
      <p>Product 2</p>
      <form class="" action="product.php" method="post">
        <input type="hidden" name="product" value="002">
        Quantity: <input type="number" name="qty" min="1" max="10" value="">
        <input type="submit" name="submit" value="Add to Cart">
      </form>
    </div>
    <div class="">
      <p>Product 3</p>
      <form class="" action="product.php" method="post">
        <input type="hidden" name="product" value="003">
        Quantity: <input type="number" name="qty" min="1" max="10" value="">
        <input type="submit" name="submit" value="Add to Cart">
      </form>
    </div>
  </body>
</html>