<?php
    //database time
    require 'dbConnection.php';
    $db = getDB();

    //get the email and password from their login attempt
    $email    = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    echo "password:$password";
    echo "<br>email:$email";
   
   //look to see if this email is indeed in our database (!!NEED TO MAKE EMAIL UNIQUE IN DATABASE!!)
   try {
        $query = "SELECT id, password FROM users WHERE email='$email'";
        echo "<br>query:$query<br>";
        $user = $db->prepare($query);
        $user->execute();
        if ($user->rowCount() > 0) {
            //they are already in the database. get their user id, and use it find their current host id
            while($row = $user->fetch(PDO::FETCH_ASSOC)) {
                $hashed_password = $row['password'];
                echo "<br>hashedPassword: $hashed_password";
                if(password_verify($password, $hashed_password)) {
                    echo "<br>we have a matched email/password combo";
                    session_start();
                    $_SESSION['userId'] =  $row['id'];
                    echo "<br>session id:" . $_SESSION['userId'];
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