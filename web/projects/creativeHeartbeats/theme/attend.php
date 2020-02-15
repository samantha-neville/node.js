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
<h1>Contact Us</h1>

<p>Questions, thoughts or comments? Contact us!</p>

<div class="container2">
  <form action="/action_page.php">
    <label for="fname">First Name</label>
    <input class='stuff' type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input class='stuff' type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="country">Country</label>
    <select class='stuff' id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>

    <label for="subject">Subject</label>
    <textarea class='stuff' id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" class='submit'  value="Submit">
  </form>
</div>

</body>
</html> 
 