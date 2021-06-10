<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<?php

if(!empty($_POST["item_n"]) && !empty($_POST["item_d"]) && !empty($_POST["time_end"]) && !empty($_FILES["item_img"]["name"]))
{
include 'connect.php';


$iid = $_POST["item_id"];
$iname = $_POST["item_n"];
$idesc = $_POST["item_d"];
$iipic = $_FILES["item_img"]["name"];
$inibid = $_POST["init_bid"];
$time_end = $_POST["time_end"];
$bidn = $_POST["bid_num"];
$bidc = $_POST["current_bid"];



$statement = "SELECT * FROM item WHERE item_n=?";
$stmt = $conn->prepare($statement);
$stmt->bind_param("s", $iname);
$stmt->execute();
$result = $stmt->get_result();
/* checks if there is an item with the same name */
