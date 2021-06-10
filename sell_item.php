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
