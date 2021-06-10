<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
include 'inc\header.php';

    session_start();

    if(isset($_SESSION["username"]))
    {
      $_SESSION = array();
