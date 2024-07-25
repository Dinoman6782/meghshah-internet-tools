<?php
$serverName = "localhost";
$dBUserName = "root";
$dBPassword = "";
$dBName = "loginSystem";

$conn = mysqli_connect($serverName, $dBUserName, $dBPassword, $dBName);

if(!$conn)
{
    die("Connect Failed: " . mysqli_connect_error());
}