<?php
    include "./includes/header.php"
?>
<?php
if(isset($_SESSION["username"])) 
{
    array_unshift($_SESSION['pages_visited'], $_SERVER['REQUEST_URI']);

// If the 'pages_visited' array has more than 3 elements, remove the last element
if(count($_SESSION['pages_visited']) > 3) {
    array_pop($_SESSION['pages_visited']);
}
}
?>
<link rel="stylesheet" href="./CSS/HomeAccordion.css"/>
<link rel="stylesheet" href="./CSS/HomeLocations.css"/>
<link rel="stylesheet" href="./CSS/HomeNews.css"/>
<link rel="stylesheet" href="./CSS/HomeCards.css" />
<body>
    <div id="cards">
        <div class="card">
            <div class="cardContent">
                <div class="container">
                    <div class="image">
                    <img id="spartin" src="./Images/Spartian_Test4.png"/>
                    </div>
                        <div class="search">
                            <?php
                            if(isset($_SESSION["id"]))
                            {
                                echo "<div>Welcome, " . $_SESSION['firstname'] . "</div>";
                            }
                            else
                            {
                                echo "<div>Welcome, user!</div>";
                            }
                            ?>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                            Ex ipsa praesentium saepe molestiae necessitatibus hic vero. Libero fugit harum itaque ab ea recusandae, 
                            maxime deleniti nemo suscipit. Odit, iure rem. </p>
                            <input type="text" id="searchBar">
                        </div>
                </div>
                <div class="accordion">
                    <button type="button" class="accordionButton"> <label>Timeline</label> <div><svg xmlns="http://www.w3.org/2000/svg" height="35px" viewBox="0 -960 960 960" width="35px" fill="#FFD700"><path d="M480-344 240-584l56-56 184 184 184-184 56 56-240 240Z"/></svg></div></button>
                    <div class="panel">
                        <img src="./Images/Greek_Timeline_Test.png">
                    </div>
                </div>
                <div class="locations">
                    LOCATIONS
                </div>
                <div class="locationsImg">
                    <button type="button" id="vanButton"></button>
                    <div id="vanDiv">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/44/Smithsonian_American_Art_Museum_exterior_3.jpg/2560px-Smithsonian_American_Art_Museum_exterior_3.jpg">
                        <div>Location: Vancover</div>
                    </div>
                    <button type="button" id="AmaButton"></button>
                    <div id="AmaDiv">
                        <img src="https://d1lfxha3ugu3d4.cloudfront.net/images/opencollection/archives/size3/S06_BEEi113.jpg">
                        <div>Location: America</div>
                    </div>
                    <button type="button" id="TorButton"></button>
                    <div id="TorDiv">
                        <img src="https://cdn.modlar.com/photos/429/img/s_1920_x/eli_edythe_broad_art_museum_5595da7654c85.jpg">
                        <div>Location: Toronto</div>
                    </div>
                    <img src="./Images/Map_Locations_Test3.png">
                </div>
                <hr style="width: 100%; height: 5px; background-color: gold;">
                <div id="newsTitle"> NEWS/EVENTS </div>
                <div class="newsContainer">
                    <div id="newsLine"></div>
                <div class="infoTitle feed1">EVENT 1</div>
                <div class="infoTitle feed2">EVENT 2</div>
                <div class="info feed1">Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                Ea vero ad recusandae excepturi eaque temporibus impedit earum eos rem molestiae, 
                eius laborum minus, sequi quae, blanditiis animi reprehenderit fugiat! Animi.</div>
                <div class="info feed2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                Repellendus, nemo inventore, vel officia tempore eveniet id animi, dolorem voluptas ea eum! 
                Quisquam omnis saepe perferendis consequatur culpa doloribus aspernatur nesciunt.</div>
                <div class="News feedimg">
                <div class="glass"></div>
                </div>
                </div>
                
            </div>      
            <div class="cardBorder"></div>
        </div>
    </div>
  </body>
<script src="./JS/accordionMenu.js"></script>
<script src="./JS/Search.js"></script>
<script src="./JS/NewsFeed.js"></script>
<script src="./JS/NewsImg.js"></script>
<?php
include "./includes/footer.php"
?>
