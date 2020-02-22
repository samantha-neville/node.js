<?php
    $name = htmlspecialchars($_POST['name']);
    $location = htmlspecialchars($_POST['location']);
    $price = htmlspecialchars($_POST['price']);
    $size = htmlspecialchars($_POST['size']);
    $language = htmlspecialchars($_POST['language']);
    echo "$name $location $price $size $language";

    //session user is not set
    if (true)
        require 'signUp.php';  
?>
