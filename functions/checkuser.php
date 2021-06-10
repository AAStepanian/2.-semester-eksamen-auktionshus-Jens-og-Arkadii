<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>

  <body>
<?php
if(!empty($_POST["username"]) && !empty($_POST["password"]))
{
include 'connect.php';


$username = $_POST["username"];
$password = $_POST["password"];
$hashed = password_hash($password, PASSWORD_DEFAULT);

$statement = "SELECT * FROM user WHERE username=?";
$stmt = $conn->prepare($statement);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();
//checks for duplicate user
if($result->num_rows>=1)
{
$value = "duplicate";
header("Location: ..\signup.php?user=$value");
}
//adds user if the user is not a dublicate
else
{
  $statement = "INSERT INTO user(username, password) VALUES(?, ?)";
  $stmt = $conn->prepare($statement);
  $stmt->bind_param("ss", $username, $hashed);
  $stmt->execute();

  $value = "success";
  header("Location: ..\signup.php?user=$value");
  } /*verifies if there is a duplicate user further */

  $conn->close();
  }

  else
  {
  header("Location: ..\signup.php");
  } /*verifying so that the user is not directly accessing this page*/

  ?>


    </body>
  </html>
