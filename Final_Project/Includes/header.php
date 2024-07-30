<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home Page</title>
    <link rel="Stylesheet" href="./CSS/NavBar.css" />
    <link rel="Stylesheet" href="./CSS/HomePage.css" />
    <link rel="Stylesheet" href="./CSS/HomePage_Formatter.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
  </head>
  <header>
    <nav>
        <ul class="sideBar">
            <li onClick=hideSidebar()><a><svg xmlns="http://www.w3.org/2000/svg" height="40px" viewBox="0 -960 960 960" width="40px" fill="#5f6368"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg></a></li>
            <li><a href="./index.php">Home</a></li>
            <li><a href="./Explore.php">Explore</a></li>
            <li><a href="./About.php">About</a></li>
            <li><a href="./Overview.php">Overview</a></li>
            <div class="log">
              <?php
              if(isset($_SESSION["id"]))
              {
                echo "<div><li><a href='./logout.php'>Logout</a></li></div>";
              }
              else
              {
                echo "<div><li><a href='./login.php'>Login</a></li></div>";
                echo "<div><li><a href='./signup.php'>Sign up</a></li></div>";
              }
              ?>
              </div>
            </div>
          </ul>
      <ul class="normalBar">
        <a href="./index.php"><img src="./Images/Logo_Test.png" style="width:80px; height: 100%;"></a>
        <li class="hideOnMoblie"><a href="./index.php">Home</a></li>
        <li class="hideOnMoblie"><a href="./Explore.php">Explore</a></li>
        <li class="hideOnMoblie"><a href="./About.php">About</a></li>
        <li class="hideOnMoblie"><a href="./Overview.php">Overview</a></li>
        <div class="log">
          <?php
              if(isset($_SESSION["id"]))
              {
                echo "<div><li class='hideOnMoblie'><a href='./logout.php'>Logout</a></li></div>";
              }
              else
              {
                echo "<div><li class='hideOnMoblie'><a href='./login.php'>Login</a></li></div>";
                echo "<div><li class='hideOnMoblie'><a href='./signup.php'>Sign up</a></li></div>";
              }
            ?>
          <div class="menu menu-button"><li onclick=showSidebar()><a><svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg></a></li></div>
        </div>
      </ul>
    </nav>
  </header>