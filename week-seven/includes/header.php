<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Header</title>
    <link rel="stylesheet" href="../css/bootstrap.css" />
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
  </head>
  <body>
    <header class="mb-5">
      <div class="container mt-5">
        <div class="d-flex justify-content-end">
          <div class="btn-group">
            <button class="btn btn-secondary btn-sm" data-bs-theme-value="dark">
              Dark
            </button>
          </div>
          <div class="btn-group">
            <button class="btn btn-light btn-sm" data-bs-theme-value="light">
              Light
            </button>
          </div>
        </div>
        <h1 class="mb-4">Animals</h1>
        <div class="row">
          <div class="col-md-4">
            <input
              type="text"
              class="form-control form-control-lg"
              placeholder="Search Animals"
            />
          </div>
          <div
            class="col-md-8 user-menu d-flex justify-content-end align-items-center"
          >
            <ul class="nav">
              <li class="nav-itm">
                <a href="#" class="nav-link">Adaptations</a>
              </li>
              <li class="nav-itm">
                <a href="C:/xampp/htdocs/termproject/includes/header.php" class="nav-link text-bg-primary rounded-3"
                  >Behavior</a
                >
              </li>
              <li class="nav-itm">
                <a href="#" class="nav-link">Conservation</a>
              </li>
              <li class="nav-itm">
                <a href="#" class="nav-link">Diversity</a>
              </li>
            </ul>
          </div>
          <!---->
        </div>
      </div>
    </header>