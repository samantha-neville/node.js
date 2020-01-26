<?php
    // Start the session
    session_start();

    // $_SESSION['cartItems'] = array();
    error_log($_POST['item']);
    $item = $_POST['item'];
    array_push($_SESSION['cartItems'], $item);
    $session = print_r($_SESSION['cartItems'], true);   
    error_log($session);
    // unset($_SESSION['cartItems']);
?>