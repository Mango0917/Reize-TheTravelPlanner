<?php
    //Start session:
    session_start();
    unset($_SESSION['email']); //Delete the key that allows us to be logged in
    //session_kill(); //Delete every created key
   $message = "wrong answer";
echo "<script type='text/javascript'>alert('$message');</script>";
    header('Location: login.php'); //Redirects us back to the Log In page
?>
