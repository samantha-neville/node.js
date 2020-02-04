<h3>Display all cookies</h3>
<?php print_r($_COOKIE);// code to display all cookies ?>
<h1>Hello 
<?php 
    if (isset($_COOKIE['user']))
        echo $_COOKIE['user'];// use the single cookie 
?>
!
</h1>
