<?php
    $site_name="Reize";

    //Database connection:
    include('config/db_connection.php');

    //Functions:
   //include('functions/data.php');

  /*  if(isset($_GET['page'])){
	    $pageid=$_GET['page']; // This sets the $pageid equal to the value given in the URL
    } else{
	    $pageid=1; // This sets the $pageid to 1, which is the Home page if there is no value given in the URl
    }

    // Page setup
    $page=data_page($conn, $pageid);

    if(isset($_SESSION['e_mail'])){
         $user_check = $_SESSION['e_mail'];
   
       $ses_sql = oci_parse($conn,"select e_mail from customer where e_mail = '$user_check' ");
        oci_execute($ses_sql);
        $row = oci_fetch_array($ses_sql,OCI_ASSOC);
   
        $login_session = $row['e_mail'];
   
        header("location:login.php");
    }*/
?>