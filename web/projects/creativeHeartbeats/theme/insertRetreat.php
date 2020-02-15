<?php
    session_start();
    $name     = $_SESSION['name'];
    $desc     = $_SESSION['description'];
    $location = $_SESSION['location'];
    $price    = $_SESSION['price'];
    $type     = $_SESSION['type'];
    $lang     = $_SESSION['language'];
    $size     = $_SESSION['group_size'];
    $duration = $_SESSION['duration'];
    $cancel   = $_SESSION['cancel_policy'];
    $sDate    = $_SESSION['start_date'];
    $eDate    = $_SESSION['end_date'];   
    echo  $name;
    echo $desc;
    echo $location;
    echo $price;
    echo $type;
    echo $lang;
    echo $size;
    echo $duration;
    echo $cancel;
    echo $sDate;
    echo $eDate;


    require 'dbConnection.php';
    $db = getDB();

    $query = "INSERT INTO retreats(price, location, type, description, start_date, end_date, duration, group_size, language, cancel_policy, host_id, name) VALUES ($price, '$location', '$type', '$desc', '$sDate', '$eDate', $duration, $size, '$lang', '$cancel', 1, '$name');";
    echo $query;
    try {
        $retreat = $db->prepare($query);
        $retreat->execute();
    }
    catch(Exception $e) {
        echo "Database Error. $e";
        die();
    }
    ?>