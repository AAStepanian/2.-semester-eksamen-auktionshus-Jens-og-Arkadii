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

}


else if($_GET["user"] == "duplicate")
{
echo "<h4>User already exists. Please try another username</h4>";
}
}

else
{
echo "<h4>Please add a username and password</h4>";
}

echo "<h4>Please fill out the fields in order to sign up";
echo "<br>";
echo "<label class='label' for='username'>Username: </label>";
echo "<input class='text' type='text' name='username' placeholder='Username'>";
echo "<br>";
echo "<label class='label' for='password'>Password: </label>";
echo "<input type='password' for='password' name='password' placeholder='Password'>";
echo "<br>";
echo "<input class='submit' type='submit' value='Register'>";
echo "</form>";

 ?>

<?php include 'inc\footer.php';
?>
