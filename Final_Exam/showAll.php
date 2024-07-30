<?php
include "./header.php";

require_once "./conn.php";
require_once "./functions.php";

showRecords($conn);
?>
<body>
<form action="./showAllAction.php" method="post">
   <input type="text" name="deleteMsg" style="width:100%; height: 200px;" required>
   <button type="submit" name="delete" style="width:100%; height: 80px;"> Delete </button>
</form>
<div><a href="./index.php">Main Page!</a></div>
<?php
    
    if(isset($_GET["error"]))
    {
        if($_GET["error"] == "stmtfailed")
        {
            echo "Something went wrong!";
        }
        if($_GET["error"] == "none")
        {
            echo "<h1>You have deleted a record to the data base!</h1>";
        }
        if($_GET["error"] == "nodatafound")
        {
            echo "<h1>The message you inputted doesn't exsits!</h1>";
        }
    }

   ?>
</body>
</html>

