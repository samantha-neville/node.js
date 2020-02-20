<?php
    //database time
    require 'dbConnection.php';
    $db = getDB();

    //get the email and password from their login attempt
    $email    = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    echo "password:<br>$password";
    echo "<br>email:$email";
   
   //look to see if this email is indeed in our database (!!NEED TO MAKE EMAIL UNIQUE IN DATABASE!!)
   try {
        $query = "SELECT id FROM users WHERE email='$email'";
        echo "query:<br>$query<br>";
        echo "password:<br>$password, hashed password: $hashed_password<br>";
        echo "<br>email:$email";
        $user = $db->prepare($query);
        $user->execute();
        if ($user->rowCount() > 0) {
            //they are already in the database. get their user id, and use it find their current host id
            while($row = $user->fetch(PDO::FETCH_ASSOC)) {
                $hashed_password = $row['password'];
                if(password_verify($password, $hashed_password)) {
                    echo "<br>we have a matched email/password combo";
                    session_start();
                    $_SESSION['userId'] =  $row['id'];
                }
            }
            //    header('Location: signIn.php');
            die();
        }
    }
   catch(Exception $e) {
       echo "Database Error. $e";
       die();
   }


 
?>