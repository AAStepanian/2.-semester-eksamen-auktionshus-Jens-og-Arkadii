<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <?php
  include 'inc\header.php';
  include 'functions\connect.php';
  ?>

      <link rel="stylesheet" href="css/signupform.css">
  <body>
<?php
//register form
echo "<img id='logo' src='images\logo.png'/>";
echo "<br>";
echo "<form class='sign_up_form' action='functions\checkuser.php' method='POST'>";
if(isset($_GET["user"]))
{
if($_GET["user"] == "success")
{
echo "<h4>Succesfully registered user. Welcome! </h4>";
