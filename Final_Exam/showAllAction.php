<?php
if(isset($_POST["delete"]))
{
    $deleteMsg = $_POST["deleteMsg"];

    require_once "./conn.php";
    require_once "./functions.php";

    deleteMessage ($conn, $deleteMsg);
}
else
{
    header("location: ./showAll.php");
    exit();
}
?>