<!DOCTYPE html>
<html>
<head>
<style>

</style>
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom fonts for this template -->
<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
<link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

<!-- Custom styles for this template -->
<link href="css/landing-page.min.css" rel="stylesheet">
<!-- <link href="nav.css" rel="stylesheet" type="text/css"> -->
</head>
<body>
<?php
    require 'navbar.php';
?>
<br><br><br>
<div class="container2">

<h1>Sign In</h1>
<form action="validateSignIn.php" method="POST">
    <!--Email -->
    <label for="email" required>Email</label>
    <input type='email' class='stuff' type="text" id="email" name="email" placeholder="example@example.com" required>
    <!-- Password -->
    <label for="password">Password</label>
    <input class='stuff' type="password" id="password" name="password" placeholder="password">
    <input type="submit" class='submit'  value="Log In">
  </form>
</div>
</body>
</html> 
 

<?php
    //database time
    require 'dbConnection.php';
    $db = getDB();

    //get the email and password from their login attempt
    $email    = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    // echo "password:$password";
    // echo "<br>email:$email";
   
   //look to see if this email is indeed in our database (!!NEED TO MAKE EMAIL UNIQUE IN DATABASE!!)
   try {
        $query = "SELECT id, password FROM users WHERE email='$email'";
        // echo "<br>query:$query<br>";
        $user = $db->prepare($query);
        $user->execute();
        if ($user->rowCount() > 0) {
            //they are already in the database. get their user id, and use it find their current host id
            while($row = $user->fetch(PDO::FETCH_ASSOC)) {
                $hashed_password = $row['password'];
                // echo "<br>hashedPassword: $hashed_password";
                if(password_verify($password, $hashed_password)) {
                    // echo "<br>we have a matched email/password combo";
                    session_start();
                    $_SESSION['userId'] =  $row['id'];
                    // echo "<br>session id:" . $_SESSION['userId'];
                    header('Location: index.php');
                    die();
                }
                else {
                    //take them back to the signIn.php. password doesn't match
                    echo "<h2 class='err-message'>Wrong Password</h2>";
                    header('Refresh: 3; URL=signIn.php');   
                    die();
                }
            }
        }
        else {
                //take them back to the signIn.php. no matching email
                echo "<h2 class='err-message'>No matching email. Redirect you to sign up!<h2>";
                header('Refresh: 5; URL=signUp.php');   
                die();
        }
    }
   catch(Exception $e) {
       echo "Database Error. $e";
       die();
   }


 
?>
