<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

session_start();

if(!isset($_GET["item_id"]) || !isset($_SESSION["username"]))
{
header("Location:itemdisplay.php");
}

else {


echo "<a href='logout.php' class='logout button'>Log out </a>";
echo "<img id='logo' src='images\logo.png'/>";
include 'functions\connect.php';

$statement = "SELECT * FROM item WHERE item_id =?";
$iid = $_GET["item_id"];

$stmt = $conn->prepare($statement);
$stmt->bind_param("s", $iid);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();


$iid = $row["item_id"];
$iname = $row["item_n"];
$i_desc = $row["item_d"];
