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
session_start();
if(!isset($_SESSION["username"]))
{
  header("Location:login.php");
}

else
 {
include 'functions\connect.php';
echo "<img id='logo' src='images\logo.png'/>";
echo "<a href='logout.php' class'logout button'>Log out </a>";

{
$statement = "SELECT * FROM bid";
$result = $conn->query($statement);

while($row = $result->fetch_assoc())
{
$uname= $row["username"];
$icurrentp = $row["bid_price"];
$stotement = "SELECT * FROM item";
$result = $conn->query($stotement);
while($row = $result->fetch_assoc())
{
$iid = $row["item_id"];
$iname= $row["item_n"];
$iimg = "images/";
$iimg = $iimg.$row["item_img"];

$link = "item_details.php?item_id=";
$item_d = $link.$iid;

echo "<div class='item'>";
if($_SESSION["username"] == "$uname"){
echo "<div class='item_row'>item name: $iname</div>";
echo "<div class='item_row'>item Id: $iid</div>";
echo "<div class='item_row'>Bidding user: '$uname'</div>";
echo "<img class='item_img' src='$iimg' alt='image'>";
echo "<div class='item_row'>Current bid: $$icurrentp</div>";
echo "<br>";
echo "</div>";

}
}
}
$conn->close();
}
}

     ?>
  </body>
</html>
