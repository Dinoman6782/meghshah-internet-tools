<?php
If(isset($_POST["submit"]))
{
    $email = $_POST["email"];
    $username = $_POST["username"];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $password = $_POST["password"];

    require_once './database/conn.php';
    require_once './database/functions.php';

    if(uidExists($conn, $username) !== false)
    {
        header("location: ../Final_Exam_Practice/signup.php?error=usernametaken");
        exit();
    }

    createUser($conn, $email, $username, $firstname, $lastname, $password);

}
else
{
    header("location: ../signup.php");
    exit();
}
?>