<!DOCTYPE html>
<html>
<head>
<title>Creative Heartbeats Retreats | Sign In</title>

  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom fonts for this template -->
<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
<link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

<!-- Custom styles for this template -->
<link href="css/landing-page.min.css" rel="stylesheet">
<!-- <link href="nav.css" rel="stylesheet" type="text/css"> -->
</head>
<body>
<?php
    require 'navbar.php';
?>
<br><br><br>
<div class="container2">

<h1>Sign In</h1>
<form action="validateSignIn.php" method="POST">
    <!--Email -->
    <label for="email" required>Email</label>
    <input type='email' class='stuff' type="text" id="email" name="email" placeholder="example@example.com" required>
    <!-- Password -->
    <label for="password">Password</label>
    <input class='stuff' type="password" id="password" name="password" placeholder="password">
    <input type="submit" class='submit'  value="Log In">
  </form>
</div>
</body>
</html> 
 