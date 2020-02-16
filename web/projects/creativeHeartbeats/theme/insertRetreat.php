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
    $first    = $_SESSION['first']; 
    $last     = $_SESSION['last']; 
    $email    = $_SESSION['email']; 
    $host     = $_SESSION['host'];

    require 'dbConnection.php';
    $db = getDB();
    try {
        //query 1: check to see if the user is already in the database. if they are, immediately grab their id
        $query1 = "SELECT id FROM users WHERE email='$email'";
        $user = $db->prepare($query1);
        $user->execute();
        if ($user->rowCount() > 0) {
            echo 'match<br>';
            //they are already in the database. get their user id, and use it find their current host id
            while($row = $user->fetch(PDO::FETCH_ASSOC)) {
                echo "in the while loop<br>";
                $userId = $row['id'];
                echo "userid $userId<br>";
                //query 2: use their user id to find their host id
                $query3 = "SELECT * FROM hosts WHERE user_id=$userId";
                echo "query3 $query3<br>";
                $host = $db->prepare($query3);
                $host->execute();
                while($row2 = $host->fetch(PDO::FETCH_ASSOC)) {
                    $hostId = $row2['id'];
                    echo $hostId;
                }

            }
        }
        else {
            echo"in the else<Br>";
            //they are not in the database. we will have to add them as a user and a host to get their host id
            //query 2: add the person to the database as a user
            $query2 = "INSERT INTO users (name, email, password, last_name) VALUES ('$first', '$email', 'pass123', '$last')";
            // $user = $db->prepare($query2);
            // $user->execute();
            // $userId = $db->lastInsertId("users_id_seq");

            //query 3: now that we have the host as a user, insert them into the hosts table with their new user id and host desc.
            $query3 = "INSERT INTO hosts (user_id, about_host) VALUES ($userId, '$host')";
            // $host = $db->prepare($query3);
            // $host->execute();
            // $hostId = $db->lastInsertId("hosts_id_seq");

        }

    }
    catch(Exception $e) {
        echo "Database Error. $e";
        die();
    }


    $query = "INSERT INTO retreats(price, location, type, description, start_date, end_date, duration, group_size, language, cancel_policy, host_id, name) VALUES ($price, '$location', '$type', '$desc', '$sDate', '$eDate', $duration, $size, '$lang', '$cancel', $hostId, '$name');";
    echo $query;
    // try {
    //     $retreat = $db->prepare($query);
    //     $retreat->execute();
    // }
    // catch(Exception $e) {
    //     echo "Database Error. $e";
    //     die();
    // }
    ?>

<!DOCTYPE html>
<html>
<head>
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom fonts for this template -->
<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
<link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

<!-- Custom styles for this template -->
<link href="css/landing-page.min.css" rel="stylesheet">
<style>
/* flexbox stuff is from w3 schools */
.flex-container {
  display: flex;
  flex-direction: column;
}

.flex-container > div {
    background-color: #f1f1f1;
    width: 80%;
    margin: 10px;
    text-align: center;
    text-align: center;
    margin:10px 10% 10px 10%;
    padding:20px;
    border-radius:10px;
}

h1 {
    text-align:center;
}
p {
    text-align:center;
}
.left-align {
  text-align:left;
}
.column {
  max-width:50%;
}
.retreat-title {
  font-size:18px;
}
</style>
</head>
<body>
<?php
require 'navbar.php';
?>
<br><br><br>
<h1>Review Info</h1>

<!-- <p>Click on a retreat to learn more!</p> -->

<div class="flex-container">
<p>Thank you for submitting your retreat! You will be notified when anyone signs up for it.</p>
</div>
<div class='right-margin2'>
<a href='index.php' class='submit'>Home</a>
</div>

</body>
</html> 
 