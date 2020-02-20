<!DOCTYPE html>
<html>
<head>
<style>

</style>
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

<h1>Sign Up</h1>
<form action="insertUser.php" method="POST">
    <label for="username">User Name</label>
    <input class='stuff' type="text" id="username" name="username" placeholder="username">

    <label for="password">Password</label>
    <input class='stuff' type="text" id="password" name="password" placeholder="password">
    <input type="submit" class='submit'  value="Next">
  </form>
</div>
</body>
</html> 
 