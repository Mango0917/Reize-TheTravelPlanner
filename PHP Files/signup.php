<?php
    //Database connection:
    include('config/db_connection.php');
    //Declare variables

    

    $f_name=$_POST['f_name'];
    $l_name=$_POST['l_name'];
    $e_mail=$_POST['e_mail'];
    $cus_password=$_POST['cus_password'];
    $cus_phone=$_POST['cus_phone'];
        if($f_name&&$l_name&&$e_mail&&$cus_password&&$cus_phone){
        $search_query="SELECT * FROM customer WHERE e_mail='$e_mail'";
        $search_result=oci_parse($conn,$search_query);
        oci_execute($search_result);
        if(oci_num_rows($search_result)>0){
            echo "<script>alert('This username already exists! Please enter another one.');
                  history.back();</script>";
        } else {
            $query="INSERT INTO customer VALUES('$e_mail','$f_name','$l_name','$cus_phone','$cus_password')";
            $result=oci_parse($conn,$query);
            oci_execute($result);
            session_start();
            $_SESSION['e_mail']=$e_mail;
            header('Location: dashboard2.php');
            }
    } else{
        header('Location: login.php');
    }
    include('config/setup.php');
?>