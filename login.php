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
echo "<form action='functions\logincontrol.php' class='login_form' method='POST'>";
echo "<h4> Please login</h4>";
echo "<label for='username' class='label'>Username:</label>";
echo "<input class='text' type='text' name='username' placeholder='Username'>";
echo "<br>";
echo "<label for='password' class='label'>Password:</label>";
echo "<input class='password' type='password' name='password' placeholder='Password'";
echo "<br>";
echo "<input class='submit' type='submit' value='Log in'/>"

     ?>

  </body>
</html>
