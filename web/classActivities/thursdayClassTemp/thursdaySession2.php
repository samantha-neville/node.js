<?php 
   // start session
   session_start();
   // save session variables into local variables
   //so we don't have to keep typing out that big ol thing
   $food = $_SESSION['favfood'];
   $color = $_SESSION['favcolor'];
   $user  = $_COOKIE['user'];
?>
<h1><?php echo "$user, your fav color is $color and your fav food is $food." // use the session variables ?></h1>
<?php if (isset($_SESSION['picURL'])) {
   echo "<h1>FROM THE FORM BABY</h1><img src='".$_SESSION['picURL']."'>";
   // unset($_SESSION['picURL']);
}
?>

<!-- //unset($_SESSION['picURL']); -->