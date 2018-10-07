<?php
  session_start();
  if (isset($_SESSION["cart"]) < 1) {
    $_SESSION["cart"] = array();
  }
  $_SESSION["product"] = "product";
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
        <input type="submit" name="submit" value="Add to Cart">
      </form>
    </div>
    <div class="">
      <p>Product 2</p>
      <form class="" action="product.php" method="post">
        <input type="hidden" name="product" value="002">
        <input type="submit" name="submit" value="Add to Cart">
      </form>
    </div>
    <div class="">
      <p>Product 3</p>
      <form class="" action="product.php" method="post">
        <input type="hidden" name="product" value="003">
        <input type="submit" name="submit" value="Add to Cart">
      </form>
    </div>
    <?php echo $_SESSION["cart"] ?>
    <a href="shopping-cart.php">SEE SHOPPING CART</a>
  </body>
</html>