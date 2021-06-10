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
echo "<img id='logo' src='images\logo.png'/>";
echo "<br>";
echo "<form action='functions\logincontrol.php' class='relogin_form' method='POST'";
    echo "<h4>Please relog</h4>";
echo "<label for='username' class='label'> Username:</label>";
