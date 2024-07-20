<?php
include "./includes/header.php"
?>
<link rel="stylesheet" href="./CSS/signupPage.css"/>
   <body>
   <form action="signupAction.php" method="post">
    <div class="signupContainer">
        <div class="rect">
        <div class="signuptitle">
            <div>SIGN UP</div>
        </div>
        <div class="firstName">
            First Name:
            <input type="Text" name="firstname" placeholder="FirstName...">
        </div>
        <div class="lastName">
        Last Name:
        <input type="Text" name="lastname" placeholder="LastName...">
        </div>
        <div class="userName">
         Username: 
        <input type="Text" name="username" placeholder="Username...">
        </div>
        <div class="email">
         Email: 
        <input type="email" name="email" placeholder="Email...">
        </div>
        <div class="password">
        Password: 
        <input type="password" name="password" placeholder="Password...">
        </div>
        <div class="password-cof"> 
        Re-Enter Password:
        <input type="password" name="passwordCof" placeholder="Re-Enter Password"></div>
        <div class="button">
        <button type="submit" name="submit">Submit</button>
        </div>
        </div>
        <?php
        if(isset($_GET["error"]))
        {
            if($_GET["error"] == "emptyinput")
            {
                echo "Please fill in all the fields";
            }
            else if($_GET["error"] == "passwordsdontmatch")
            {
                echo "Passwords don't match!";
            }
            else if ($_GET["error"] == "none")
            {
                echo"You have signed up!";
            }
        }
        ?>
    </div>
   </form>
   
</body>
<?php
include "./includes/footer.php"
?>