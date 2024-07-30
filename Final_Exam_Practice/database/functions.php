<?php
function createUser($conn, $email, $username, $firstname, $lastname, $password)
{
    $sql = "INSERT INTO `signup_users`(`email`, `username`, `firstname`, `lastname`, `password`) VALUES (?,?,?,?,?);";

    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql))
    {
        header("location: ../Final_Exam_Practice/signup.php?error=stmtFailed");
        exit();
    }
    
    $hasedpwd = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sssss", $email, $username, $firstname, $lastname, $hasedpwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    loginUser($conn, $username, $password);
}

function uidExists($conn, $username)
{
    $sql = "SELECT * FROM signup_users WHERE username = ?;";

    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql))
    {
        header("location: ../Final_Exam_Practice/login.php?error=stmtFailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);
    if($row = mysqli_fetch_assoc($resultData))
    {
        return $row;
    }
    else
    {
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

    if($checkpwd === false)
    {
        header("location: ../login.php?error=wronglogin");
        exit();
    }
    elseif($checkpwd === true)
    {
        session_start();

        $_SESSION['id'] = $uidExists['id'];
        $_SESSION['username'] = $uidExists["username"];

        header("location: ../Final_Exam_Practice/index.php");
    }
}
?>