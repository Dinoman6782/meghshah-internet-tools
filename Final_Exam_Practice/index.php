<?php
include "./includes/header.php";
?>
  <body>
    <?php
    if(isset($_SESSION["id"]))
    {
      echo "<h1>Welcome, " . $_SESSION["username"] . "!<h1>";
    }
    else
    {
      echo "<h1>Welcome,  user!<h1>";
    }
    ?>
  </body>
  <?php
include "./includes/footer.php";
?>
