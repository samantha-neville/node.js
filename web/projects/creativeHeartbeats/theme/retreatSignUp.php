<?php
    session_start();
    
    $name = htmlspecialchars($_GET['name']);
    $location = htmlspecialchars($_GET['location']);
    $price = htmlspecialchars($_GET['price']);
    $size = htmlspecialchars($_GET['size']);
    $language = htmlspecialchars($_GET['language']);
    $desc = htmlspecialchars($_GET['desc']);


    if (isset($_SESSION['userId']))
    {
        //session user is not set
        $userId = $_SESSION['userId'];
        echo "nada: $name $location $price $size $language";

        $query1 = "SELECT * FROM retreats WHERE name='$name'";
        echo $query1;
        $retreat = $db->prepare($query1);
        $retreat->execute();
        while($row  = $retreat->fetch(PDO::FETCH_ASSOC)) {
            $retreatId = $row['id'];
            echo "retreatId $retreatId";
            echo "userID $userId";
        }


        // $query2 = "INSERT INTO attendees (user_id, retreat_id) VALUES ($userId, $retreatId)";
        // $attendee = $db->prepare($query2);
        // $attendee->execute();



    }
    else {
      require 'signUp.php';  
    }
?>
