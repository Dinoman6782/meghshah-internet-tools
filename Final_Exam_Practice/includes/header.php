<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link rel="stylesheet" href="./CSS/bootstrap.css" />
    <link rel="stylesheet" href="./CSS/style.css" />
  </head>
  <header>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid d-flex justify-content-between">
    <div>
      <a class="navbar-brand" href="./index.php">Home</a>
      <a class="navbar-brand" href="#">Special Page</a>
    </div>
    <div>
      <?php
        if(isset($_SESSION["id"]))
        {
          echo "<a class='navbar-brand' href='./logout.php'>Logout</a>";
        }
        else
        {
          echo "<a class='navbar-brand' href='#'>Login</a>";
          echo "<a class='navbar-brand' href='./Signup.php'>Signup</a>";
        }
      ?>
    </div>
  </div>
</nav>
  </header>