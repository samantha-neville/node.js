<?php
    $name = htmlspecialchars($_GET['name']);
    $location = htmlspecialchars($_GET['location']);
    $price = htmlspecialchars($_GET['price']);
    $size = htmlspecialchars($_GET['size']);
    $language = htmlspecialchars($_GET['language']);
    $desc = htmlspecialchars($_GET['desc']);

    echo "nada: $name $location $price $size $language";

    //session user is not set
    if (true)
        require 'signUp.php';  
?>
