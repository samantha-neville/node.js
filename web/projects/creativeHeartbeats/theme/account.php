<?php
    session_start();
    if (isset($_SESSION['userId']))
    {
      $userId = $_SESSION['userId'];

      require 'dbConnection.php';
      $db = getDB();
    
      $query = "SELECT * FROM users WHERE id=$userId";
      $user = $db->prepare($query);
      $user->execute();
    }


?>
<!DOCTYPE html>
<html>
<head>
<title>Creative Heartbeats Retreats | Account</title>

  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom fonts for this template -->
<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
<link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

<!-- Custom styles for this template -->
<link href="css/landing-page.min.css" rel="stylesheet">
<!-- <link href="nav.css" rel="stylesheet" type="text/css"> -->
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

<h1>Your Account</h1>

<div class="flex-container">
<?php
  while($row  = $user->fetch(PDO::FETCH_ASSOC)) {
    $name     = $row['name'];
    $last     = $row['last_name'];
    $email    = $row['email'];
    $id       = $row['id'];
   
    echo "
    <div>
          <br><b><p class='left-align'>Name:</b> $name $last</p>
          <b><p class='left-align'>Email:</b> $email</p>
          <b><p class='left-align'>User ID:</b> $id</p>
    </div>";
}
?>
</div>
<br><br>
<!-- retreats you have signed up for -->
<h1>Retreats You're Attending</h1>
<div class="flex-container">
<?php

    $query2 = "SELECT attendees.user_id, attendees.retreat_id, retreats.id, retreats.name, retreats.price FROM attendees FULL OUTER JOIN retreats ON attendees.retreat_id = retreats.id WHERE attendees.user_id = $userId";
    $userRetreats = $db->prepare($query2);
    $userRetreats->execute();
   
    while($row2  = $userRetreats->fetch(PDO::FETCH_ASSOC)) {
        $name   = $row2['name'];
        $price   = $row2['price'];
       
        echo "
        <div>
              <br><b><p class='left-align'>Retreat Name:</b>$name</p>
              <b><p class='left-align'>Price:</b>$price</p>
        </div>";
    }
    // echo "query2 $query2";

?>
</div>
<br><br>
<!-- retreats you have signed up for -->
<h1>Retreats You're Hosting</h1>
<div class="flex-container">
<?php

    $query2 = "SELECT attendees.user_id, attendees.retreat_id, retreats.id, retreats.name, retreats.price FROM attendees FULL OUTER JOIN retreats ON attendees.retreat_id = retreats.id WHERE retreats.host_id = $userId";
    $userRetreats = $db->prepare($query2);
    $userRetreats->execute();
   
    while($row2  = $userRetreats->fetch(PDO::FETCH_ASSOC)) {
        $name   = $row2['name'];
        $price   = $row2['price'];
       
        echo "
        <div>
              <br><b><p class='left-align'>Retreat Name:</b>$name</p>
              <b><p class='left-align'>Price:</b>$price</p>
        </div>";
    }
    // echo "query2 $query2";

?>
</div>


</body>
</html> 
