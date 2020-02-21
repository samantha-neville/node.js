<?php
session_start();
?>

<link href="nav.css" rel="stylesheet" type="text/css">
  <!-- Navigation -->
  <nav class="navbar navbar-light bg-light static-top">
    <div class="container">
      <a class="navbar-brand" href="#">Creative Heartbeats Retreats</a>
      <!-- <a class="btn btn-primary" href="#">Sign In</a> -->
      <ul>
        <li><a class="active" href="index.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="host.php">Host a Retreat</a></li>
        <li><a href="attend.php">Attend a Retreat</a></li>
        <li><a href="photos.php">Photos</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </div>
    <a class="active right-margin3" href="signUp.php">Sign Up</a>
    <a class="active right-margin3" href="signIn.php">Sign In</a>
    <?php    
      if (isset($_SESSION['userId']))
      {
        $userId = $_SESSION['userId'];
        echo "<a class='active' href='account.php'>My Account</a>";
      }
    ?>
  </nav>