<?php
$id = htmlspecialchars($_POST['id']);
$photoshoot_type = htmlspecialchars($_POST['photoshoot_type']);
$photoshoot_length = htmlspecialchars($_POST['photoshoot_length']);
$photoshoot_number_of_people = htmlspecialchars($_POST['photoshoot_number_of_people']);
$photoshoot_number_of_outfits = htmlspecialchars($_POST['photoshoot_number_of_outfits']);
echo "$id\n";
echo $photoshoot_type;
echo $photoshoot_length;
echo $photoshoot_number_of_people;
echo $photoshoot_number_of_outfits;
?>
