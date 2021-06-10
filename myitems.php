<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
    <link rel="stylesheet" href="css/signupform.css">
  <body>
    <?php
include 'inc\header.php';
session_start();
if(!isset($_SESSION["username"]))
{
  header("Location:login.php");
}

else
 {
include 'functions\connect.php';
echo "<img id='logo' src='images\logo.png'/>";
echo "<a href='logout.php' class'logout button'>Log out </a>";

{
$statement = "SELECT * FROM bid";
$result = $conn->query($statement);

while($row = $result->fetch_assoc())
{
$uname= $row["username"];
$icurrentp = $row["bid_price"];
$stotement = "SELECT * FROM item";
$result = $conn->query($stotement);
while($row = $result->fetch_assoc())
{
$iid = $row["item_id"];
$iname= $row["item_n"];
