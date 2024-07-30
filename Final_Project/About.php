<?php
include "./Includes/header.php";
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
<link rel="stylesheet" href="./CSS/AboutPage.css"/>
<body>
<div style= "display: flex; flex-direction: row;
justify-content: center; 
align-items: center; height: 150px; width: 100%;
font-size: 100px; font-weight: 700;">ABOUT</div>
<div class="aboutText">
<div>
Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
Dignissimos, nostrum. Doloribus, aliquam quo deleniti labore quasi eius. 
Aliquid amet architecto voluptatem rerum voluptas laborum. Impedit, minus? 
Doloremque sunt pariatur modi.

Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum quaerat blanditiis 
quibusdam quasi similique nostrum maxime tempore nesciunt consequatur voluptatum, 
nobis quos tenetur odio quod magnam nam, perferendis consequuntur amet.
</div>
<div class="aboutRect"></div>
</div>
<div id="divder"></div>
<div class="aboutText">
<div class="aboutRect"></div>
<div>
Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
Dignissimos, nostrum. Doloribus, aliquam quo deleniti labore quasi eius. 
Aliquid amet architecto voluptatem rerum voluptas laborum. Impedit, minus? 
Doloremque sunt pariatur modi.

Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum quaerat blanditiis 
quibusdam quasi similique nostrum maxime tempore nesciunt consequatur voluptatum, 
nobis quos tenetur odio quod magnam nam, perferendis consequuntur amet.
</div>
</div>
</body>
<?php
include "./Includes/footer.php";
?>