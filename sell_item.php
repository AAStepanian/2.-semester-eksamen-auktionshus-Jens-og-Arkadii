<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="css\signupform.css"
  </head>

  <body>
<?php
include 'inc\header.php';
include 'functions\connect.php';
echo "<img id='logo' src='images\logo.png'/>";
echo "<br>";
echo "<form class='sell_item_form' action='functions\itemcontrol.php' method='POST' enctype='multipart/form-data'";

if(isset($_GET["item"]))
{
if($_GET["item"] == "duplicate")
{
echo "<h4> You have already put this item up for sale</h4>";
echo "<br>";
echo "<h4>Please try again</h4>";
}

else if($_GET["item"] == "success")
{
echo "<h4> Your item is now up for sale</h4>";

}
else
{
echo "<h4> Put an item up for sale</h4>";
}
}

echo "<h4>Add the item that you want to put up for sale</h4>";
echo "<br>";

echo "<label class='label' for='item_n'>Item name:</label>";
echo "<input class='text' type='text' name='item_n'/>";
echo "<br>";

echo "<label class='label' for='item_d'>Item description:</label>";
echo "<input class='text' type='text' name='item_d'/>";
echo "<br>";


echo "<label class='label' for='time_end'>Ending bid time:</label>";
echo "<input class='text' type='text' name='time_end'/>";
echo "<br>";

echo "<label class='label' for='item_img'>Picture:</label>";
echo "<input class='text' type='file' value='item_img' name='item_img'/>";
echo "<br>";

echo "<label class='label' for='init_bid'>Initial bid in $:</label>";
echo "<input class='text' type='text' name='init_bid'/>";
echo "<br>";

echo "<label class='label' for='current_bid'>Current bid in $:</label>";
echo "<input class='text' type='text' name='current_bid'/>";
echo "<br>";



echo "<input class='submit' type='submit' value='Sell Item' name='Put up for sale'/>";
echo "</form>";


 ?>
  </body>
</html>
