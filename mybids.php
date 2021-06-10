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
echo "<br>";

{
$statement = "SELECT * FROM bid";
$result = $conn->query($statement);

while($row = $result->fetch_assoc())
{
$uname= $_SESSION["username"];
$icurrentp = $row["bid_price"];
