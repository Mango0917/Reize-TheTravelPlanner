<?php
    //Database connection:
    include('config/db_connection.php');
    //Declare variables

  //Start session:
    session_start();
    $setgoal=$_POST['setgoal'];
    $email=$_SESSION['email'];
    if($setgoal){
        $search_query="SELECT * FROM users WHERE email='$email'";
        $search_result=mysqli_query($conn,$search_query);
        if(mysqli_num_rows($search_result)>0){
           $query="UPDATE users SET setgoal='$setgoal' WHERE email='$email'";
        
            $result=mysqli_query($conn,$query);
            header('Location: dashboard.php');
            }
    } else{
        header('Location: login.php');
    }
    include('config/setup.php');
?>