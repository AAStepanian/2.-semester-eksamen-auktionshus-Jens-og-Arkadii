<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<?php
include 'inc\header.php';
echo "<img id='logo' src='images\logo.png'/>";
include 'functions\connect.php';


if(!isset($_POST["item_id"]))
{
header("Location: itemdisplay.php");
}

else
{
$item_id = $_POST["item_id"];
session_start();

$statement = "SELECT * FROM bid WHERE item_id=?";
$stmt = $conn->prepare($statement);
$stmt->bind_param("s", $item_id);
$stmt->execute();
$result = $stmt->get_result();
$username = !isset($_SESSION["username"]);
$row = $result->fetch_assoc();

if($_SESSION["username"] == $row["username"])
{
echo "You are already the highest bidder";
}

else
{
$statement = "SELECT * FROM item WHERE item_id=?";
$stmt = $conn->prepare($statement);
$stmt->bind_param("s", $item_id);
$stmt->execute();
