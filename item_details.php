<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

session_start();

if(!isset($_GET["item_id"]) || !isset($_SESSION["username"]))
{
header("Location:itemdisplay.php");
}

else {


echo "<a href='logout.php' class='logout button'>Log out </a>";
echo "<img id='logo' src='images\logo.png'/>";
include 'functions\connect.php';

$statement = "SELECT * FROM item WHERE item_id =?";
$iid = $_GET["item_id"];

$stmt = $conn->prepare($statement);
$stmt->bind_param("s", $iid);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();


$iid = $row["item_id"];
$iname = $row["item_n"];
$i_desc = $row["item_d"];
$iiprice = $row["init_bid"];
$end = $row["time_end"];
$bid_num = $row["bid_num"];
$icprice = $row["current_bid"];
$iimg = "images/";
$iimg = $iimg.$row["item_img"];
$username = !isset($_SESSION["username"]);
echo "<div class='item'>";
echo "<div class='item_row'>Item id: $iid</div>";
echo "<div class='item_row'>item name: $iname</div>";
echo "<img class='item_img' src='$iimg' alt='image'>";
echo "<div class='item_row'>Item description: $i_desc</div>";
echo "<div class='item_row'>End time: $end</div>";
echo "<div class='item_row'>Number of bids: $bid_num</div>";
echo "<form action='bid.php' method='POST'>";
echo "<input type='hidden' value='$iid' name='item_id'/>";
echo "<input type='hidden' value'$username' name='username'>";
echo "<select name='bid'>";
for($i=0; $i < 220; $i++)
{
$j = $i*10;
echo "<option value='$j'>$$j</option>";
}
echo "</select>";
echo "<input type='submit' value='Bid'>";
echo "</form>";
echo "</div>";

$conn->close();

}

     ?>
  </body>
</html>
