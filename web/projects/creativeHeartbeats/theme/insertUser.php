<?php
    //idea 1 for searching. If they don't have a start date, make the start date today to the end of the year
    $name     = htmlspecialchars($_POST['first']); 
    $last     = htmlspecialchars($_POST['last']); 
    $email    = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    
    
    require 'dbConnection.php';
    $db = getDB();

    //if we felt fancy, we could do a lookup before we insert it to make sure there aren't already any users in the database with this email already
    //if there was a match, we would redirect them to the login page.
    try {
        $query = "INSERT INTO users (name, email, password, last_name) VALUES ('$name', '$email', '$hashed_password', '$last')";
        echo "query: <br>$query<br>";
        $user = $db->prepare($query);
        $user->execute();
        $userId = $db->lastInsertId("users_id_seq");
        echo "userid:<br>$userId<br>";
        header('Location: signIn.php');
    }
    catch(Exception $e) {
        echo "Database Error. $e";
        die();
    }
    // session_start();
    // $_SESSION['email'] = $name;
    // $_SESSION['password'] = $desc;

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
<?php
    echo "
    <div>
      <p><b class='retreat-title'>Your Info</b><br><br>the email and password you entered</p><br><br>
          <br><b><p class='left-align'>Name:</b> $name</p>
          <br><b><p class='left-align'>Last:</b> $last</p>
          <br><b><p class='left-align'>Email:</b> $email</p>
          <br><b><p class='left-align'>Password:</b> $password</p>
    </div>";
?>

</body>
</html> 
 