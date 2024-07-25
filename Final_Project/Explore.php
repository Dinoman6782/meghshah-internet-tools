<?php
include "./Includes/header.php";
if(!isset($_SESSION["username"])) 
{
    header("Location: ./login.php");
    exit();
}
?>
<?php
array_unshift($_SESSION['pages_visited'], $_SERVER['REQUEST_URI']);

// If the 'pages_visited' array has more than 3 elements, remove the last element
if(count($_SESSION['pages_visited']) > 3) {
    array_pop($_SESSION['pages_visited']);
}
?>
<link rel="stylesheet" href="./CSS/ExplorePage.css"/>
<body>
 <div id="title">EXPLORE</div>
<div id="cards">
    <div class="card">
        <div class="card-border"></div>
        <div class="card-content">
            <div style="font-size: 50px; font-weight: 700;">Overview!</div>
        </div>
    </div>
    <div class="card">
    <div class="card-border"></div>
    <div class="card-content">
    <div style="font-size: 50px; font-weight: 700;">Books</div>
    </div>
    </div>
    <div class="card">
    <div class="card-border"></div>
    <div class="card-content">
    <div style="font-size: 50px; font-weight: 700;">Books</div>
    </div>
    </div>
    <div class="card">
    <div class="card-border"></div>
    <div class="card-content">
        <div style="font-size: 50px; font-weight: 700;">Books</div>
    </div>
    </div>
    <div class="card">
    <div class="card-border"></div>
    <div class="card-content">
    <div style="font-size: 50px; font-weight: 700;">Books</div>
    </div>
    </div>
    <div class="card">
    <div class="card-border"></div>
    <div class="card-content">
    <div style="font-size: 50px; font-weight: 700;">Books</div>
    </div>
    </div>
</div>
</body>
<script src="./JS/cards.js"></script>
<?php
include "./Includes/footer.php";
?>