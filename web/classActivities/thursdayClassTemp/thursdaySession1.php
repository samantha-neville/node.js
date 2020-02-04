<?php
   // Start the session
   session_start();
?>
<!DOCTYPE html>
<html>
   <body>
      <?php
         // remove previous session variable
         // Set session variables
         $_SESSION['favfood'] = 'CHICKIE NUGGIES';
         $_SESSION['favcolor'] = 'sparkles';
         // echo that variables have been set
         echo "your fav food is ".$_SESSION['favfood'];
         echo "<br> your fav color is ".$_SESSION['favcolor'] ."<br>";
?>
      <a href="thursdaySession2.php">Check the variables on another page</a>
<h1>form time baby</h1>
   <form action='' method='post'>
   <input type='text' name='picture'>
   <input type='submit' name='submit' value='GET IT'>
</form>
      <?php 
      if (isset($_POST['submit'])) {
         $_SESSION['picURL'] = $_POST['picture'];      
      }
      ?>
   </body>
</html>