<?php
//$username="msaini";
//$password="Memyself5";
//$db="UF";
//$conn=oci_connect($username,$password,$db) or die("Connection could not be established.");
/*$db = "(DESCRIPTION=(ADDRESS_LIST = (ADDRESS = (PROTOCOL = TCP)(HOST = oracle.cise.ufl.edu)(PORT = 1521)))(CONNECT_DATA=(SID=orcl)))" ;

   if($c = OCILogon("msaini", "Memyself5", $db))
    {
   //     echo “Successfully connected to Oracle.\n”;
        OCILogoff($c);
    }
    else
    {
        $err = OCIError();
       // echo “Connection failed.” . $err[text];
    }*/

 $db = "(DESCRIPTION =
        (ADDRESS = (PROTOCOL = TCP)(HOST = oracle.cise.ufl.edu)(PORT = 1521))
        (CONNECT_DATA=(SID=orcl))
      )" ;
    $conn = oci_connect("msaini", "Memyself5", $db);
    //$query = "SELECT * from users WHERE userid='".$nis."' and password='".$password."'";
   // $result = oci_parse($connect, $query);
    //oci_execute($result);
    //$tmpcount = oci_fetch($result);
   // if ($tmpcount==1) {
     //   echo "Login Success";}
   // else
    //{
      //  echo "Login Failed";
    //}
?>