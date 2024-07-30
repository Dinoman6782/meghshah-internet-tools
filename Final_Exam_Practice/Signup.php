<?php
include "./includes/header.php";
?>
<body>
<div class="container p-3 mt-5 bg-light rounded">
<form action="signupAction.php" method="post">
        <div class="row">
          <div class="form-group col-md-6">
            <label>Email</label>
            <input
              type="email"
              class="form-control"
              id="emailInput"
              name="email"
              placeholder="Something@test.com"
            required/>
          </div>
          <div class="form-group col-md-6">
            <label>Username</label>
            <input
              type="text"
              class="form-control"
              id="usernameInput"
              name="username"
              placeholder="myUsername123"
              required/>
          </div>
        </div>
        <div class="row">
          <div class="form-group col-md-6">
            <label>First Name</label>
            <input
              type="text"
              class="form-control"
              id="fNameInput"
              name="firstname"
              placeholder="Bob"
              required/>
          </div>
          <div class="form-group col-md-6">
            <label>Last Name</label>
            <input
              type="text"
              class="form-control"
              id="lNameInput"
              name="lastname"
              placeholder="Builder"
              required/>
          </div>
        </div>
        <div class="form-group">
          <label>Password</label>
          <input
            type="password"
            class="form-control"
            id="passwordInput"
            name="password"
            placeholder="Enter Password Here"
            required/>
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-primary mt-3" name="submit">Sign in</button>
        </div>
      
    </form>
    <?php
    if(isset($_GET["error"]))
    {
      if($_GET["error"] == "stmtFailed"){
        echo "Something went Wrong, try agian!";
      }
      if($_GET["error"] == "usernametaken")
      {
        echo "The username has already been taken!";
      }
      if($_GET["error"] == "none")
      {
        echo "You have signed up!";
      }

    }
    ?>
    </div>
</body>
<?php
include "./includes/footer.php";
?>