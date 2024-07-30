<?php
$serverName = "localhost";
$dbUserName = "root";
$dbPassword = "";
$dbName = "examp_signup";

$conn = mysqli_connect($serverName, $dbUserName, $dbPassword, $dbName);

if(!$conn)
{
    die("Connect failed " . mysqli_connect_error());
}

?>