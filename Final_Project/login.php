<?php
include "./includes/header.php"
?>
<link rel="stylesheet" href="./CSS/loginPage.css"/>
   <body>
   <form action="loginAction.php" method="post">
    <div class="signupContainer">
        <div class="rect">
        <div class="signuptitle">
            <div>LOGIN</div>
        </div>
        <div class="userName">
         Username: 
        <input type="Text" name="username" placeholder="Username...">
        </div>
        <div class="password">
        Password: 
        <input type="password" name="password" placeholder="Password...">
        </div>
        <div class="button">
        <button type="submit" name="submit">Login</button>
        </div>
        </div>
    </div>
   </form>
   <?php
        if(isset($_GET["error"]))
        {
            if($_GET["error"] == "emptyinput")
            {
                echo "Please fill in all the fields!";
            }
            else if($_Get["error"] == "wronglogin")
            {
                echo "Invalid Login Information!";
            }
        }
        ?>
</body>
<?php
include "./includes/footer.php"
?>