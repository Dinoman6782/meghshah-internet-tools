<?php
If(isset($_POST["submit"]))
{
$username = $_POST["username"];
$password = $_POST["password"];

require_once './database/conn.php';
require_once './database/functions.php';\

if emptyInputLogin($username, $password !== false)
{
    header("location: ../Final_project/login.php?error=emptyinput");
    exit();
}

loginUser($conn, $username, $password);

}
else
{
    header("location: ../Final_project/login.php?");
    exit();
}
