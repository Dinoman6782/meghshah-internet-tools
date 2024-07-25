<?php
include "./Includes/header.php";
if(!isset($_SESSION["username"])) 
{
    header("Location: ./login.php");
    exit();
}
?>
<link rel="stylesheet" href="./CSS/OverviewFormat.css"/>
<body>
 <div id="title">DASHBOARD</div>
 <hr style="border: solid 2px gold;">
 
 <?php
    // Calculate the duration of the session
    $duration = time() - $_SESSION['login_time'];
    // Calculate hours, minutes, and seconds
    $hours = floor($duration / 3600);
    $minutes = floor(($duration / 60) % 60);
    $seconds = $duration % 60;

    // Display the duration of the session
    echo "<div class='disTime'>LOGGED TIME: $hours H : $minutes M : $seconds S</div>";

    echo "<div class='dasHistory'>CONTINUE VIEWING: </div>";
    $i = 0;
    $images = [];
    foreach ($_SESSION['pages_visited'] as $page) {
        if($page === '/final_project/index.php')
        {
            $images[] = './Images/HomePage_Screenshot.png';
        }
        else if($page === '/final_project/Explore.php')
        {
            $images[] = './Images/ExplorePage_Screenshot.png';
        }
        else if($page === '/final_project/About.php')
        {
            $images[] = './Images/AboutPage_Screenshot.png';
        }
        $i++;
        if($i == 3) break; // Only show the last three pages
    }
 ?>
<div class="dasContainer">
    <?php foreach ($images as $image): ?>
        <div class="dasRect"><img style="height: 100%; width: 100%; border-radius: 10px; border: solid 1px gold;" src="<?php echo $image; ?>"></div>
    <?php endforeach; ?>
</div>
<div style="height: 100px; width: 100%;">Tests</div>
</body>

<?php
include "./Includes/footer.php";
?>