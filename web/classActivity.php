<?php
//get post data
$email = htmlspecialchars($_POST['email']);
$password = htmlspecialchars($_POST['password']);

//do stuff with the data
echo "Email: $email<br> Password: $password";
?>
