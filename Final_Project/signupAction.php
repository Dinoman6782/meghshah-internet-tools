<?php
If(isset($_POST["submit"]))
{
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $passwordCof = $_POST["passwordCof"];

    require_once './database/conn.php';
    require_once './database/functions.php';

    if(emptyInputSignup($firstname, $lastname, $username, $email, $password, $passwordCof) !== false)
    {
        header("location: ../Final_project/signup.php?error=emptyinput");
        exit();
    }

    if(pwdMatch($password, $passwordCof) !== false)
    {
        header("location: ../Final_project/signup.php?error=passwordsdontmatch");
        exit();
    }

    if(uidExists($conn, $username) !== false)
    {
        header("location: ../Final_project/signup.php?error=usernametaken");
        exit();
    }

    createUser($conn, $firstname, $lastname, $username, $email, $password);


}
else{
    header("location: ../signup.php");
    exit();
}
?>