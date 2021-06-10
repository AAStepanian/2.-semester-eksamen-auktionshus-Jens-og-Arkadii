<?php

/*Defines database hostname, username, password and databasename*/

$DBHOST = "localhost";
$DBUSER = "root";
$DBPASSWORD = "root";
$DBNAME = "auctionhouse";

//establishes a connection to the database
$conn = new mysqli($DBHOST, $DBUSER, $DBPASSWORD, $DBNAME);
