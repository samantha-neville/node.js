<?php
    $name = htmlspecialchars($_POST['name']);
    $location = htmlspecialchars($_POST['location']);
    $price = htmlspecialchars($_POST['price']);
    $size = htmlspecialchars($_POST['size']);
    $language = htmlspecialchars($_POST['language']);
    echo "$name $location $price $size $language";
?>


<!DOCTYPE html>
<html>
<head>
<title>Creative Heartbeats Retreats | Sign Up</title>

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
<form action="insertNewUser.php" method="POST">
    <!--First Name -->
    <label for="fname">First Name</label>
    <input class='stuff' type="text" id="fname" name="first" placeholder="Your first name.." required>
    <!--Last Name -->
    <label for="fname">Last Name</label>
    <input class='stuff' type="text" id="lname" name="last" placeholder="Your last name.." required>
    <!--Email -->
    <label for="email" required>Email</label>
    <input type='email' class='stuff' type="text" id="email" name="email" placeholder="example@example.com" required>
    <!-- Password -->
    <label for="password">Password</label>
    <input class='stuff' type="password" id="password" name="password" placeholder="password">
    <input type="submit" class='submit'  value="Sign Up">
  </form>
</div>
</body>
</html> 
 