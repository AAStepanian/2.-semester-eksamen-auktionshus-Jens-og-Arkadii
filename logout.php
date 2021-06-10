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

            session_destroy();

            echo "<h1 id='exit_title'> Thank you for your visit, goodbye.</h1>";
          }
            else
             {
      header("Location:login.php");
            }
           ?>
        </body>
      </html>
