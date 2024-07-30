<?php
function addMessage ($conn, $message)
{
    $sql = "INSERT INTO `string_info`(`message`) VALUES (?);";

    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql))
    {
        header("location: ./index.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $message);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ./index.php?error=none");
    exit();
}

function showRecords($conn)
{
    $sql = "SELECT `string_id`, `message` FROM `string_info`;";

    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0)
    {
        while ($rows = mysqli_fetch_assoc($result))
        {
            echo "MessageID: " . $rows["string_id"]. "  Message:". $rows["message"]. "<br>";
        }
    }
    else
    {
        echo "No Data in the data base!";
    }
}

function deleteMessage($conn, $deleteMsg)
{
    $sql = "DELETE FROM `string_info` WHERE `message` = ?;";

    $stmt = mysqli_stmt_init($conn);

    if(!mysqli_stmt_prepare($stmt, $sql))
    {
        header("location: ./index.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $deleteMsg);
    mysqli_stmt_execute($stmt);
    

    $data = mysqli_stmt_affected_rows($stmt);

    if($data === 0)
    {
        header("location: ./showAll.php?error=nodatafound");
        exit();
    }
    mysqli_stmt_close($stmt);
    header("location: ./showAll.php?error=none");
    exit();
}
?>
