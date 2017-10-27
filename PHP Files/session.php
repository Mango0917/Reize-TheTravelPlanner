<?php
   include('config/db_connection.php');
   session_start();
   
   $user_check = $_SESSION['e_mail'];
   
   $ses_sql = oci_parse($conn,"select e_mail from customer where e_mail = '$user_check' ");
   oci_execute($ses_sql);
   $row = oci_fetch_array($ses_sql,OCI_ASSOC);
   
   $login_session = $row['e_mail'];
   
   if(!isset($_SESSION['e_mail'])){
      header("location:login.php");
   }
?>