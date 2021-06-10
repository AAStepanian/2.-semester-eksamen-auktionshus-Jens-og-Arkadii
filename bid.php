<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<?php
include 'inc\header.php';
echo "<img id='logo' src='images\logo.png'/>";
include 'functions\connect.php';


if(!isset($_POST["item_id"]))
{
header("Location: itemdisplay.php");
}

else
{
$item_id = $_POST["item_id"];
session_start();

$statement = "SELECT * FROM bid WHERE item_id=?";
$stmt = $conn->prepare($statement);
$stmt->bind_param("s", $item_id);
$stmt->execute();
$result = $stmt->get_result();
$username = !isset($_SESSION["username"]);
$row = $result->fetch_assoc();

if($_SESSION["username"] == $row["username"])
{
echo "You are already the highest bidder";
}

else
{
$statement = "SELECT * FROM item WHERE item_id=?";
$stmt = $conn->prepare($statement);
$stmt->bind_param("s", $item_id);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();
$bid = $_POST["bid"];
$username = $_SESSION["username"];

if($bid>$row["current_bid"])
{
$statement = "UPDATE item SET current_bid=? WHERE item_id=?";
$stmt = $conn->prepare($statement);
$stmt->bind_param("dd", $bid, $item_id);
$stmt->execute();
/*bid value update*/

$statement = "UPDATE item SET bid_num=bid_num+1 WHERE item_id=?";
$stmt = $conn->prepare($statement);
$stmt->bind_param("d", $item_id);
$stmt->execute();
/*number of bid update*/

$statement = "INSERT INTO bid(username, item_id, bid_price) VALUES(?, ?, ?)";
$stmt = $conn->prepare($statement);

$stmt->bind_param("sid", $username, $item_id, $bid);
$stmt->execute();

$statement = "DELETE FROM bid WHERE bid_price<? AND item_id=?";
$stmt = $conn->prepare($statement);
$stmt->bind_param("dd", $bid, $item_id);
$stmt->execute();

echo "Congrats, the current bid value is $".$bid;
}
else
{
  echo "Your bid must be greater than the current bid price.";

}
}
$conn->close();
}

 ?>
  </body>
</html>
