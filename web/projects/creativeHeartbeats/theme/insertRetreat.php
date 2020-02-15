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
    echo $name;
    // echo "type $type<br> dates $start_date $end_date <br>ppl $num_ppl";
    ?>