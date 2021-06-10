<?php

/*Defines database hostname, username, password and databasename*/

$DBHOST = "localhost";
$DBUSER = "root";
$DBPASSWORD = "root";
$DBNAME = "auctionhouse";

//establishes a connection to the database
$conn = new mysqli($DBHOST, $DBUSER, $DBPASSWORD, $DBNAME);

//in case the connection fails, displays an error
if($conn->connect_error)
{
  die("Connection failed:" .$conn->connect_errror);
}


?>
