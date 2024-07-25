<?php
function emptyInputSignup($firstname, $lastname, $username, $email, $password, $passwordCof)
{
    $result;
    if(empty($firstname) || empty($lastname) || empty($username) || empty($email) || empty($password) || empty($passwordCof) )
    {
        $result = true;
    }
    else
    {
        $result = false;
    }
    return $result;
}

function pwdMatch($password, $passwordCof)
{
    $result;
    if($password !== $passwordCof)
    {
        $result = true;
    }
    else
    {
        $result = false;
    }
    return $result;
}

function createUser($conn, $firstname, $lastname, $username, $email, $password)
{
    $sql = "INSERT INTO `users`(`firstname`, `lastname`, `username`, `email`, `password`) VALUES (?, ?, ?, ?, ?);";
    
    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql))
    {
        header("location: ../Final_project/signup.php?error=stmtfailed");
        exit();
    }

    $hasedpwd = password_hash($password, PASSWORD_DEFAULT);
    
    mysqli_stmt_bind_param($stmt, "sssss", $firstname, $lastname, $username, $email, $hasedpwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    loginUser($conn, $username, $password);
}

function emptyInputLogin($username, $password)
{
    $result;
    if(empty($username) || empty($password))
    {
        $result = true;
    }
    else
    {
        $result = false;
    }
    return $result;
}

function uidExists($conn, $username)
{
    $sql = "SELECT * FROM users WHERE username = ?;";

    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql))
    {
        header("location: ../Final_project/login.php?error=stmtFailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);
    if($row = mysqli_fetch_assoc($resultData))
    {
        return $row;
    }
    else{
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function loginUser($conn, $username, $password)
{
    $uidExists = uidExists($conn, $username);

    if($uidExists === false)
    {
        header("location: ../login.php?error=wronglogin");
        exit();
    }

    $pwdHashed = $uidExists["password"];

    $checkpwd = password_verify($password, $pwdHashed);

    if ($checkpwd === false)
    {

        header("location: ./login.php?error=wronglogin");
    }
    else if ($checkpwd === true)
    {
        session_start();

        $_SESSION["id"] = $uidExists["id"];
        $_SESSION["username"] = $uidExists["username"];
        $_SESSION["firstname"] = $uidExists["firstname"];
        $_SESSION['login_time'] = time();
        $_SESSION['pages_visited'] = array();
        header("location: ./index.php");
    }
}

