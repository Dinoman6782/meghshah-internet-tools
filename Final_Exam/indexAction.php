<?php

if(isset($_POST["submit"]))
{
    $message = $_POST["message"];

    require_once "./conn.php";
    require_once "./functions.php";

    addMessage ($conn, $message);
}
else
{
    header("location: ./index.php");
    exit();
}

?>