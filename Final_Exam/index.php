<?php
include "./header.php";
?>
<body>
   <form action="./indexAction.php" method="post">
   <input type="text" name="message" style="width:100%; height: 200px;" required>
   <button type="submit" name="submit" style="width:100%; height: 80px;"> Submit</button>
   </form>
   <div><a href="./showAll.php">SHOW ALL RECORDS</a></div>
   <?php
    
    if(isset($_GET["error"]))
    {
        if($_GET["error"] == "stmtfailed")
        {
            echo "Something went wrong!";
        }
        if($_GET["error"] == "none")
        {
            echo "<h1>You have added a record to the data base!</h1>";
        }
    }

   ?>
</body>
</html>