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
$statement = "SELECT * FROM user WHERE username=?";
$stmt = $conn->prepare($statement);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
$hash = $row["password"];

if(password_verify($_POST["password"], $hash))
{
  echo "Succesfully logged in";
  session_start();
  $_SESSION["username"] = $_POST["username"];
  header("Location: ..\itemdisplay.php");
}

else {
  header("Location:..\relogin.php");
}
}

else
{
  header("Location:..\login.php");
}


     ?>
  </body>
</html>
