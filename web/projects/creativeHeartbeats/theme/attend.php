<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Creative Heartbeats Retreats | Attend</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="css/landing-page.css" rel="stylesheet">
  <!-- <link href="nav.css" rel="stylesheet" type="text/css"> -->
</head>

<body>
<?php
require 'navbar.php';
?>

  <!-- Masthead -->
  <header class="masthead text-white text-center">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <!-- <div class="col-xl-12"> -->
          <!-- <h1 class="mb-5">Find your retreat</h1> -->
        <!-- </div> -->
        <div class="col-md-12 col-lg-8 col-xl-7 mx-auto">
          <!-- <form> -->
            <div class="form-row">
              <div class="col-lg-12 col-md-9">
                <!-- <input type="email" class="form-control form-control-lg" placeholder="Enter your email..."> -->
                <?php
                require $_SERVER["DOCUMENT_ROOT"].'/projects/creativeHeartbeats/theme/searchbar/index.php';
              ?>
              </div>
              <!-- <div class="col-12 col-md-3">
                <button type="submit" class="btn btn-block btn-lg btn-primary">Sign up!</button>
              </div> -->
            </div>
          <!-- </form> -->
        </div>
      </div>
    </div>
  </header>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
