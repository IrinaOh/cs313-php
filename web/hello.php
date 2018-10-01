<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CS313 Week 2</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/week2.js"></script>
    <link rel="stylesheet" href="css/week2.css">
    <link rel="stylesheet" type="text/css" href="main.css">
  </head>
  <body>
    <?php include('nav.php') ?>	
    <button type="button" name="button" id="btn" onclick="alertClicked()">Click Me</button>
    <div id="div1">
      <p>div</p>
    </div>
    <input type="text" name="" value="" id="newColor">
    <button type="button" name="button" onclick="changeColor()">Change Color(vanillaJS)</button>

    <div id="div2">
      <p>div</p>
    </div>
    <input type="text" name="" value="" id="newColor2">
    <button type="button" name="button" id="btn2">Change Color(jQuery)</button>

    <div id="div3">
      <p>div</p>
    </div>
    <button type="button" name="button" id="btn3">HIDE DIV</button>
  </body>
</html>
