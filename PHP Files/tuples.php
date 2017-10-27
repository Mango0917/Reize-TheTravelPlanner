<?php   
 include('config/db_connection.php'); 
 //Start session:
 session_start();
// $lifetime=1440;
  //  session_set_cookie_params($lifetime);
		
		$log=$_SESSION['logged_in'];
	//echo $_SESSION['logged_In'];
   // if(!isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == ''){
	   if($log!='OK'){
                header ("Location: login.php");
                exit; // stop further executing, very important
            }
   //include('session.php');
?>

 
<?php 
include('config/setup.php'); ?>
<?php 
						
						 $email=$_SESSION['e_mail'];
                                    

                                    $stmt="SELECT  (
													SELECT COUNT(*)
													FROM   FLIGHTS
													) AS FCOUNT,
													(
													SELECT COUNT(*)
													FROM   FBOOKING
													) AS FBCOUNT,
													(SELECT COUNT(*)
													FROM   HOTEL
													) AS HCOUNT,
													(SELECT COUNT(*)
													FROM   HBOOKING
													) AS HBCOUNT,
													(SELECT COUNT(*)
													FROM   CITY
													) AS CITYCOUNT,
													(SELECT COUNT(*)
													FROM   CAR
													) AS CCOUNT,
													(SELECT COUNT(*)
													FROM   CBOOKING
													) AS CBCOUNT,
													(SELECT COUNT(*)
													FROM   CAR_CATEGORY
													) AS CCATCOUNT,
													(SELECT COUNT(*)
													FROM   THEMES
													) AS TCOUNT,
													(SELECT COUNT(*)
													FROM   CUSTOMER
													) AS CUSCOUNT
											FROM    dual";

                                    $stid=oci_parse($conn,$stmt);
                                    if( !oci_execute($stid) ) {
                                        $e = oci_error();
                                        
                                        oci_close($conn);
                                    } 
                                    else {
											$row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS);
											$fCount=$row['FCOUNT'];
											$fbCount=$row['FBCOUNT'];
											$hCount=$row['HCOUNT'];
											$hbCount=$row['HBCOUNT'];
											$cCount=$row['CCOUNT'];
											$cbcount=$row['CBCOUNT'];
											$cusCount=$row['CUSCOUNT'];
											$cCatCount=$row['CCATCOUNT'];
											$tCount=$row['TCOUNT'];
											$cityCount=$row['CITYCOUNT'];
											echo "TOTAL NUMBER OF TUPLES:" .($fCount+$fbCount+$hbCount+$hCount+$cbcount+$cCatCount+$cCount+$cityCount+$cusCount+$tCount);
						
						//
						
                                    }
						
						
						
						  ?>