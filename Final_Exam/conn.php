<?php
$ServerName = "localhost";
$dBUserName = "root";
$dBPassword = "";
$dBName = "final";

$conn = mysqli_connect($ServerName, $dBUserName, $dBPassword, $dBName);

if(!$conn)
{
    die("Connection Failed!" . mysqli_connect_error());
}
?>