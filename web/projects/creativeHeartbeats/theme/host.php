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
<h1>Host a Retreat</h1>

<p>Have a creative retreat that you want to post for others to see and sign up for? Enter the retreat information here to add it!</p>

<div class="container2">
  <form action="reviewRetreat.php" method="POST">

    <!-- Retreat Info -->
    <h2>Retreat Info</h2><br>
    <!-- Name -->
    <label for="name">Name</label>
    <input class='stuff' type="text" id="name" name="name" placeholder="Your retreat name... ">
  
    <!-- Type -->
    <label for="type">Type</label>
    <select class='stuff' id="type" name="type">
      <option value="paint">Painting/Drawing</option>
      <option value="fabric">Fabric Arts</option>
      <option value="floral">Floral</option>
      <option value="other">Other</option>
    </select>
    <!-- Start Date -->
    <label for="start_date">Start Date</label>
    <input class='stuff' type="text" id="start_date" name="start_date" placeholder="YYYY-MM-DD">
    <!-- End Date -->
    <label for="end_date">End Date</label>
    <input class='stuff' type="text" id="end_date" name="end_date" placeholder="YYYY-MM-DD">
    <!-- Duration -->
    <label for="duration">Duration</label>
    <input class='stuff' type="text" id="duration" name="duration" placeholder="Number of days (ex. 3)">
    <!-- Description -->
    <label for="description">Description</label>
    <textarea class='stuff' id="description" name="description" placeholder="Describe your retreat.." style="height:200px"></textarea>
    <!-- Group Size -->
    <label for=" group_size"> Group Size</label>
    <input class='stuff' id=" group_size" name=" group_size" placeholder="Max number of people (ex. 50)">
     <!-- Language -->
     <label for="language">Language</label>
    <input class='stuff' id="language" name="language" placeholder="English">
     <!-- location -->
     <label for="location">Location</label>
    <input class='stuff' id="location" name="location" placeholder="California, United States">
     <!-- Cancel Policy -->
     <label for="cancel">Cancel Policy</label>
    <textarea class='stuff' id="cancel" name="cancel_policy" placeholder="Describe your cancellation policy..." style="height:200px"></textarea>
    <!-- Your Info -->
    <h2>Your Info</h2><br>
    <!--First Name -->
    <label for="fname">First Name</label>
    <input class='stuff' type="text" id="fname" name="firstName" placeholder="Your first name..">
    <!--Last Name -->
    <label for="fname">Last Name</label>
    <input class='stuff' type="text" id="lname" name="lastName" placeholder="Your last name..">
    <!--Email -->
    <label for="email">Email</label>
    <input class='stuff' type="text" id="email" name="email" placeholder="example@example.com">
     <!--Phone -->
     <label for="phone">Phone</label>
    <input class='stuff' type="text" id="phone" name="phone" placeholder="1-888-888-8888">



    <input type="submit" class='submit'  value="Next">
  </form>
</div>

</body>
</html> 
 