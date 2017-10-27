<?php
    //Start session
    session_start();

    include('config/setup.php');

    if(!isset($_SESSION['email'])){
        header('Location: login.php');
    }
    //print_r($_SESSION);
    $this_id=$user['id'];
    //echo $this_id;
    $delete_query="DELETE FROM users WHERE id='$this_id'";
    $delete_result=mysqli_query($conn,$delete_query);
    //echo "<script>alert('Your account has been deleted and all your records have been erased!');</script>";
    header('Location: login.php');
?>