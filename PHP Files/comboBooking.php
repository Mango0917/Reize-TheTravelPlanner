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

<html >
    <head>
    
    <meta charset="UTF-8">
    <link rel="icon" type="image" href="images/icon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!-- Sticky Footer CSS -->
<link rel="stylesheet" href="sticky_footer.css" />
<!-- Blog Navigation Bar CSS -->
<link rel="stylesheet" href="blog.css" />
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous" />
<!-- Google Fonts: Noto Sans -->
<link href='https://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet' type='text/css'>
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous" />
<!-- jQuery UI CSS -->
<link rel="stylesheet" href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css" />
<!-- Font Awesome -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<!-- jQuery UI -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

       
        <title>Home | REIZE</title>
        
        <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">

	<!--<script src="assets/js/jquery-3.1.1.min.js"></script>-->
	<link rel="stylesheet" type="text/css" href="assets/css/ionicons.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/animate.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="assets/js/bootstrap.min.js"></script>

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,700' rel='stylesheet' type='text/css'>


	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
  
    </head>
<body background="assets/images/background2.jpg">
    
			<nav class="nav nav-default nav-transparent" style="margin: 10px;"> <!--I changed the navbar to nav -->
			  <div class="container-fluid" style="margin: 10px;">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header" style="margin: 10px;">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
							<a href="index.php"><i class="ion-logo"> <img src="assets/images/logo.png" style="margin-left: 20px;"/> </i>
			      </br><a class="navbar-brand" href="index.php" style="color:#FFFFFF; font-weight:bold">&nbsp;&nbsp;&nbsp;<span class="brand-underline">REIZE</span></a>
			    </div>

			    <!-- Collect the nav links, forms, and other content for toggling-->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="margin-top: 10px;">

			      <ul class="nav navbar-nav navbar-right nav-heads">
			        
			        	<li><a href="flight.php" style="color:#F26351; font-weight:bold; font-size:1.3em;">FLIGHTS</a></li>
			        <li><a href="carrental.php" style="color:#F26351; font-weight:bold; font-size:1.3em;">CAR RENTALS</a></li>
			        <li><a href="hotel.php" style="color:#F26351; font-weight:bold;  font-size:1.3em;">HOTELS</a></li>
					<li><a href="combo.php" style="color:#F26351; font-weight:bold; font-size:1.3em;"><span class="brand-underline">TRIP PLANNER</span></a></li>
					<li><a href="popular.php" style="color:#F26351; font-weight:bold; font-size:1.3em;">POPULAR</a></li>
						<li><a href="userprofile.php" style="color:#F26351; font-weight:bold;font-size:1.3em;">USER PROFILE</a></li>						
			        <li><a href="logout.php" style="color:#F26351; font-weight:bold;font-size:1.3em;">LOGOUT</a></li> 
			      </ul>
			    </div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>
</br>		
</br>
</br>
</br>
</br>	
			
		

<div>

<div class="container" style="background-color:#000080;  background-color: rgba(0, 0, 0, .5); width=300px; height=300px; border-radius: 25px;">
<br/>
 <h1 align="center" style="color:#FFFFFF; font-weight:bold;"> CONFIRMATION </h1>
        <hr/>
<div class="col-md-4 col-md-offset-4">
</div>


<?php


///// dep_date={$DEP_DATE}&ret_date={$RET_DATE}&src_time={$src_time}&dest_time={$dest_time}&num={$NO_OF_PASSENGERS}&tprice={$tprice}

$srcId=$_GET['src_id'];
$srcName=$_GET['src_name'];
$dep_date=$_GET['dep_date'];
$src_time=$_GET['src_time'];

$hId=$_GET['hid'];

$destId=$_GET['dest_id'];
$destName=$_GET['dest_name'];
$ret_date=$_GET['ret_date'];
$dest_time=$_GET['dest_time'];

$tprice=$_GET['tprice'];
$num=$_GET['num'];


$stmt="SELECT * FROM FLIGHTS where FL_NAME='$srcName' and FL_ID='$srcId' and DEP_DATE='$dep_date' and DEP_TIME='$src_time'";

$stid=oci_parse($conn,$stmt);
if( !oci_execute($stid) ) {
    $e = oci_error();
    echo htmlentities($e['message'], ENT_QUOTES);
	oci_close($conn);
} 
else {
    $row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS);    
	$f1ID= $row['FL_ID']."\n";
    $f1Name=$row['FL_NAME'];
    $f1price=$row['PRICE'];
    $f11price=$num*$f1price;
    $f1src=$row['SRC_C_ID'];
    $f1dest=$row['DEST_C_ID'];
    $f1DeptDate=$row['DEP_DATE'];
    $f1DeptTime=$row['DEP_TIME'];
    $f1ArrDate=$row['AR_DATE'];
    $f1ArrTime=$row['AR_TIME'];

}

$stmt="SELECT * FROM HOTEL where H_ID=$hId";

$stid=oci_parse($conn,$stmt);
if( !oci_execute($stid) ) {
    $e = oci_error();
    echo htmlentities($e['message'], ENT_QUOTES);
	oci_close($conn);
} 
else {
    $row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS);    

	$hnoOfDays=ceil(abs((strtotime($ret_date)-strtotime($dep_date)))/86400);
	$hphpPrice=$hnoOfDays*$row['PRICE'];
	$hurl=$row['H_URL'];
	$hprice=$row['PRICE'];
	$hName=$row['H_NAME'];
	$hStreet=$row['H_STREET'];
    $hCustRating=$row['CUS_RATING'];
    $hotelRatng=$row['RATING'];
   // echo $hName;
	
}


$stmt="SELECT * FROM FLIGHTS where FL_NAME='$destName' and FL_ID='$destId' and DEP_DATE='$ret_date' and DEP_TIME='$dest_time'";

$stid=oci_parse($conn,$stmt);
if( !oci_execute($stid) ) {
    $e = oci_error();
    echo htmlentities($e['message'], ENT_QUOTES);
	oci_close($conn);
} 
else {
    $row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS);    
//	echo $row['FL_ID']."\n";
    $f2ID= $row['FL_ID']."\n";
    $f2Name=$row['FL_NAME'];
    $f2price=$row['PRICE'];
    $f22price=$num*$f2price;
    $f2src=$row['SRC_C_ID'];
    $f2dest=$row['DEST_C_ID'];
        $f2DeptDate=$row['DEP_DATE'];
    $f2DeptTime=$row['DEP_TIME'];
    $f2ArrDate=$row['AR_DATE'];
    $f2ArrTime=$row['AR_TIME'];

}



if (isset($_POST['postsubmit'])){


    $email=$_SESSION['e_mail'];
    $stmt="INSERT INTO FBOOKING VALUES('','$email','$srcName','$srcId','$src_time',TO_DATE('$dep_date'),'$f1price','$num')";
    $stid=oci_parse($conn,$stmt);
    if( !oci_execute($stid) ) {
        echo "ERRRROOORRR";
        $e = oci_error();
        echo htmlentities($e['message'], ENT_QUOTES);
        oci_close($conn);
    } 
    else {
      //  echo "Confirmed First Flight!";
        /////
    }
	$intNum=(int)$num;
	$stmt="UPDATE FLIGHTS SET SEATS= SEATS-$num WHERE FL_NAME='$srcName' AND FL_ID='$srcId' AND DEP_DATE=TO_DATE('$dep_date') AND DEP_TIME='$src_time'";
	//$stmt="INSERT INTO FBOOKING VALUES('','$email','$name','$id','$time',TO_DATE('$date'),'$fprice','$num')";
    $stid=oci_parse($conn,$stmt);
    if( !oci_execute($stid) ) {
        echo "ERRRROOORRR";
        $e = oci_error();
        echo htmlentities($e['message'], ENT_QUOTES);
        oci_close($conn);
    } 
    else {
      //  echo "UPDATED First Flight!!!";
        /////
    }
    //oci_close($conn);

    $stmt="INSERT INTO HBOOKING VALUES('','$email',TO_DATE('$dep_date'),TO_DATE('$ret_date'),'$hphpPrice',$hId)";
    $stid=oci_parse($conn,$stmt);
    if( !oci_execute($stid) ) {
        echo "ERRRROOORRR";
        $e = oci_error();
        echo htmlentities($e['message'], ENT_QUOTES);
        oci_close($conn);
    } 
    else {
       // echo "Confirmed Hotel!";
        /////
    }

    $stmt="INSERT INTO FBOOKING VALUES('','$email','$destName','$destId','$dest_time',TO_DATE('$ret_date'),'$f2price','$num')";
    $stid=oci_parse($conn,$stmt);
    if( !oci_execute($stid) ) {
        echo "ERRRROOORRR";
        $e = oci_error();
        echo htmlentities($e['message'], ENT_QUOTES);
        oci_close($conn);
    } 
    else {
        ?>
        <script type="text/javascript">
     			alert("PACKAGE BOOKING CONFIRMED!"); 
  				</script>
        <?php
       // echo "Confirmed Second Flight!";
        /////
    }
	$intNum=(int)$num;
	$stmt="UPDATE FLIGHTS SET SEATS= SEATS-$num WHERE FL_NAME='$destName' AND FL_ID='$destId' AND DEP_DATE=TO_DATE('$ret_date') AND DEP_TIME='$dest_time'";
	//$stmt="INSERT INTO FBOOKING VALUES('','$email','$name','$id','$time',TO_DATE('$date'),'$fprice','$num')";
    $stid=oci_parse($conn,$stmt);
    if( !oci_execute($stid) ) {
        echo "ERRRROOORRR";
        $e = oci_error();
        echo htmlentities($e['message'], ENT_QUOTES);
        oci_close($conn);
    } 
    else {
       // echo "UPDATED Second Flight!!!";
        /////
    }
    oci_close($conn);
}
///

?>
<div class="col-md-10 col-md-offset-1">
       
                       <div class="panel panel-info" style="color:#A2CA28;">
                    <div class="panel-heading" role="tab" id="headingOne" style="background-color:#A2CA28;">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                <h2 class="text-center" style="font-weight:bold;">Outgoing Flight</h2>
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" style="background-color:#000070;  background-color: rgba(0, 0, 0, .5);"  aria-labelledby="headingOne">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3">
                                    <form action="" method="post">
                                   <table cols=2 border=3 style="color:#FFFFFF;  cellspacing=1; cellpadding=1;  border:1px solid #FFFFFF; " >
                                        
                                            <tr style="border:1px solid #FFFFFF; padding: 5px;"><td style="border:1px solid #FFFFFF; padding: 5px;font-weight:bold;">  <label class="form-inline" style="color:#F26351; font-weight:bold; font-size:1.3em;"><h3 style="color:#FFFFFF" >Flight Number</h3></label></td>
                                            <td style="border:1px solid #FFFFFF; padding: 5px;font-weight:bold;"><label style="color:#F26351; font-weight:bold; font-size:1.3em;"><h3 style="color:#FFFFFF" > <?php echo $f1ID ?> </h3></label>
                                            </td></tr>
                                            <br/>
                                            <tr style="border:1px solid #FFFFFF; padding: 5px;"><td style="border:1px solid #FFFFFF; padding: 5px;font-weight:bold;"><label class="form-inline" style="color:#F26351; font-weight:bold;font-size:1.3em;"><h3 style="color:#FFFFFF" >Flight Name</h3></label></td>
                                            <td style="border:1px solid #FFFFFF; padding: 5px;font-weight:bold;"><label style="color:#F26351; font-weight:bold; font-size:1.3em;"> <h3 style="color:#FFFFFF" ><?php echo $f1Name?> </h3></label>
                                            </td></tr>
                                            <br/>
                                            <tr style="border:1px solid #FFFFFF; padding: 5px;"><td style="border:1px solid #FFFFFF; padding: 5px;font-weight:bold;"><label class="form-inline" style="color:#F26351; font-weight:bold; font-size:1.3em;"><h3 style="color:#FFFFFF" >Price</h3></label></td>
                                            <td style="border:1px solid #FFFFFF; padding: 5px;font-weight:bold;"><label style="color:#F26351; font-weight:bold; font-size:1.3em;"><h3 style="color:#FFFFFF"> <?php echo $num." * $".$f1price." = $".$f11price ?></h3> </label>
                                            </td></tr>
                                            <br/>
                                            <tr style="border:1px solid #FFFFFF; padding: 5px;"><td style="border:1px solid #FFFFFF; padding: 5px;font-weight:bold;"><label class="form-inline" style="color:#F26351; font-weight:bold; font-size:1.3em;"><h3 style="color:#FFFFFF" >Date of Departure</h3></label></td>
                                            <td style="border:1px solid #FFFFFF; padding: 5px;font-weight:bold;"><label style="color:#F26351; font-weight:bold; font-size:1.3em;"><h3 style="color:#FFFFFF"> <?php echo $f1DeptDate ?></h3> </label>
                                            <br/>
                                            <tr style="border:1px solid #FFFFFF; padding: 5px;"><td style="border:1px solid #FFFFFF; padding: 5px;font-weight:bold;"><label class="form-inline" style="color:#F26351; font-weight:bold; font-size:1.3em;"><h3 style="color:#FFFFFF" >Time of Departure</h3></label></td>
                                            <td style="border:1px solid #FFFFFF; padding: 5px;font-weight:bold;"><label style="color:#F26351; font-weight:bold; font-size:1.3em;"><h3 style="color:#FFFFFF"> <?php echo $f1DeptTime ?></h3> </label>
                                            <tr style="border:1px solid #FFFFFF; padding: 5px;"><td style="border:1px solid #FFFFFF; padding: 5px;font-weight:bold;"><label class="form-inline" style="color:#F26351; font-weight:bold; font-size:1.3em;"><h3 style="color:#FFFFFF" >Arrival Date</h3></label></td>
                                            <td style="border:1px solid #FFFFFF; padding: 5px;font-weight:bold;"><label style="color:#F26351; font-weight:bold; font-size:1.3em;"><h3 style="color:#FFFFFF"> <?php echo $f1ArrDate ?></h3> </label>
                                            <tr style="border:1px solid #FFFFFF; padding: 5px;"><td style="border:1px solid #FFFFFF; padding: 5px;font-weight:bold;"><label class="form-inline" style="color:#F26351; font-weight:bold; font-size:1.3em;"><h3 style="color:#FFFFFF" >Arrival Time </h3></label></td>
                                            <td style="border:1px solid #FFFFFF; padding: 5px;font-weight:bold;"><label style="color:#F26351; font-weight:bold; font-size:1.3em;"><h3 style="color:#FFFFFF"> <?php echo $f1ArrTime ?></h3> </label>
                                            
                                            
                                            
                                            
                                            </td></tr>
                                        </table>
                                    
                                      
                                </div><!-- END column -->
                            </div><!-- END row -->
                        </div><!-- END Panel-body -->
                    </div><!-- END Panel-collapse -->
                </div><!-- END Panel -->
            <!-- END panel-group -->
                <br/>
                <br/>
                <br/>
       
                       <div class="panel panel-info" style="color:#A2CA28;">
                    <div class="panel-heading" role="tab" id="headingTwo" style="background-color:#A2CA28;">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <h2 class="text-center" style="font-weight:bold;">Hotel</h2>
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" style="background-color:#000070;  background-color: rgba(0, 0, 0, .5);"  aria-labelledby="headingTwo">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3">
                                    <form action="signup.php" method="post">
                                   <table cols=2 border=3 style="color:#FFFFFF;  cellspacing=1; cellpadding=1;  border:1px solid #FFFFFF; " >
                                        
                                            <tr style="border:1px solid #FFFFFF; padding: 5px;"><td style="border:1px solid #FFFFFF; padding: 5px;font-weight:bold;">  <label class="form-inline" style="color:#F26351; font-weight:bold; font-size:1.3em;"><h3 style="color:#FFFFFF" >Hotel Name</h3></label></td>
                                            <td style="border:1px solid #FFFFFF; padding: 5px;font-weight:bold;"><label style="color:#F26351; font-weight:bold; font-size:1.3em;"><h3 style="color:#FFFFFF" > <?php echo $hName ?> </h3></label>
                                            </td></tr>
                                            <br/>
                                            <tr style="border:1px solid #FFFFFF; padding: 5px;"><td style="border:1px solid #FFFFFF; padding: 5px;font-weight:bold;"><label class="form-inline" style="color:#F26351; font-weight:bold;font-size:1.3em;"><h3 style="color:#FFFFFF" >Hotel Address</h3></label></td>
                                            <td style="border:1px solid #FFFFFF; padding: 5px;font-weight:bold;"><label style="color:#F26351; font-weight:bold; font-size:1.3em;"> <h3 style="color:#FFFFFF" ><?php echo $hStreet?> </h3></label>
                                            </td></tr>
                                            <br/>
                                            <tr style="border:1px solid #FFFFFF; padding: 5px;"><td style="border:1px solid #FFFFFF; padding: 5px;font-weight:bold;"><label class="form-inline" style="color:#F26351; font-weight:bold; font-size:1.3em;"><h3 style="color:#FFFFFF" >Price</h3></label></td>
                                            <td style="border:1px solid #FFFFFF; padding: 5px;font-weight:bold;"><label style="color:#F26351; font-weight:bold; font-size:1.3em;"><h3 style="color:#FFFFFF"> <?php echo $hnoOfDays." * $".$hphpPrice." = $".$hprice ?></h3> </label>
                                            </td></tr>
                                            <br/>
                                            <tr style="border:1px solid #FFFFFF; padding: 5px;"><td style="border:1px solid #FFFFFF; padding: 5px;font-weight:bold;"><label class="form-inline" style="color:#F26351; font-weight:bold; font-size:1.3em;"><h3 style="color:#FFFFFF" >Hotel Rating</h3></label></td>
                                            <td style="border:1px solid #FFFFFF; padding: 5px;font-weight:bold;"><label style="color:#F26351; font-weight:bold; font-size:1.3em;"><h3 style="color:#FFFFFF"> <?php echo $hotelRatng. " Star" ?></h3> </label>
                                            <br/>
                                            <tr style="border:1px solid #FFFFFF; padding: 5px;"><td style="border:1px solid #FFFFFF; padding: 5px;font-weight:bold;"><label class="form-inline" style="color:#F26351; font-weight:bold; font-size:1.3em;"><h3 style="color:#FFFFFF" >Customer Rating</h3></label></td>
                                            <td style="border:1px solid #FFFFFF; padding: 5px;font-weight:bold;"><label style="color:#F26351; font-weight:bold; font-size:1.3em;"><h3 style="color:#FFFFFF"> <?php echo $hCustRating ?></h3> </label>
                                            
                                            
                                            
                                            
                                            </td></tr>
                                        </table>
                                      
                                </div><!-- END column -->
                            </div><!-- END row -->
                        </div><!-- END Panel-body -->
                    </div><!-- END Panel-collapse -->
                </div><!-- END Panel -->
            <!-- END panel-group -->
                <br/>
                <br/>
                <br/>
 
                    <div class="panel panel-info" style="color:#A2CA28;">
                    <div class="panel-heading" role="tab" id="headingThree" style="background-color:#A2CA28;">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <h2 class="text-center" style="font-weight:bold;">Return Flight</h2>
                            </a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" style="background-color:#000070;  background-color: rgba(0, 0, 0, .5);"  aria-labelledby="headingThree">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6 col-md-offset-3">
                                    <form action="signup.php" method="post">
                                  <table cols=2 border=3 style="color:#FFFFFF;  cellspacing=1; cellpadding=1;  border:1px solid #FFFFFF; " >
                                        
                                            <tr style="border:1px solid #FFFFFF; padding: 5px;"><td style="border:1px solid #FFFFFF; padding: 5px;font-weight:bold;">  <label class="form-inline" style="color:#F26351; font-weight:bold; font-size:1.3em;"><h3 style="color:#FFFFFF" >Flight Number</h3></label></td>
                                            <td style="border:1px solid #FFFFFF; padding: 5px;font-weight:bold;"><label style="color:#F26351; font-weight:bold; font-size:1.3em;"><h3 style="color:#FFFFFF" > <?php echo $f2ID ?> </h3></label>
                                            </td></tr>
                                            <br/>
                                            <tr style="border:1px solid #FFFFFF; padding: 5px;"><td style="border:1px solid #FFFFFF; padding: 5px;font-weight:bold;"><label class="form-inline" style="color:#F26351; font-weight:bold;font-size:1.3em;"><h3 style="color:#FFFFFF" >Flight Name</h3></label></td>
                                            <td style="border:1px solid #FFFFFF; padding: 5px;font-weight:bold;"><label style="color:#F26351; font-weight:bold; font-size:1.3em;"> <h3 style="color:#FFFFFF" ><?php echo $f2Name?> </h3></label>
                                            </td></tr>
                                            <br/>
                                            <tr style="border:1px solid #FFFFFF; padding: 5px;"><td style="border:1px solid #FFFFFF; padding: 5px;font-weight:bold;"><label class="form-inline" style="color:#F26351; font-weight:bold; font-size:1.3em;"><h3 style="color:#FFFFFF" >Price</h3></label></td>
                                            <td style="border:1px solid #FFFFFF; padding: 5px;font-weight:bold;"><label style="color:#F26351; font-weight:bold; font-size:1.3em;"><h3 style="color:#FFFFFF"> <?php echo $num." * $".$f2price." = $".$f22price ?></h3> </label>
                                            </td></tr>
                                            <br/>
                                            <tr style="border:1px solid #FFFFFF; padding: 5px;"><td style="border:1px solid #FFFFFF; padding: 5px;font-weight:bold;"><label class="form-inline" style="color:#F26351; font-weight:bold; font-size:1.3em;"><h3 style="color:#FFFFFF" >Date of Departure</h3></label></td>
                                            <td style="border:1px solid #FFFFFF; padding: 5px;font-weight:bold;"><label style="color:#F26351; font-weight:bold; font-size:1.3em;"><h3 style="color:#FFFFFF"> <?php echo $f2DeptDate ?></h3> </label>
                                            <br/>
                                            <tr style="border:1px solid #FFFFFF; padding: 5px;"><td style="border:1px solid #FFFFFF; padding: 5px;font-weight:bold;"><label class="form-inline" style="color:#F26351; font-weight:bold; font-size:1.3em;"><h3 style="color:#FFFFFF" >Time of Departure</h3></label></td>
                                            <td style="border:1px solid #FFFFFF; padding: 5px;font-weight:bold;"><label style="color:#F26351; font-weight:bold; font-size:1.3em;"><h3 style="color:#FFFFFF"> <?php echo $f2DeptTime ?></h3> </label>
                                            <tr style="border:1px solid #FFFFFF; padding: 5px;"><td style="border:1px solid #FFFFFF; padding: 5px;font-weight:bold;"><label class="form-inline" style="color:#F26351; font-weight:bold; font-size:1.3em;"><h3 style="color:#FFFFFF" >Arrival Date</h3></label></td>
                                            <td style="border:1px solid #FFFFFF; padding: 5px;font-weight:bold;"><label style="color:#F26351; font-weight:bold; font-size:1.3em;"><h3 style="color:#FFFFFF"> <?php echo $f2ArrDate ?></h3> </label>
                                            <tr style="border:1px solid #FFFFFF; padding: 5px;"><td style="border:1px solid #FFFFFF; padding: 5px;font-weight:bold;"><label class="form-inline" style="color:#F26351; font-weight:bold; font-size:1.3em;"><h3 style="color:#FFFFFF" >Arrival Time </h3></label></td>
                                            <td style="border:1px solid #FFFFFF; padding: 5px;font-weight:bold;"><label style="color:#F26351; font-weight:bold; font-size:1.3em;"><h3 style="color:#FFFFFF"> <?php echo $f2ArrTime ?></h3> </label>
                                            
                                            
                                            
                                            
                                            </td></tr>
                                        </table>
                                     
                                </div><!-- END column -->
                            </div><!-- END row -->
                        </div><!-- END Panel-body -->
                    </div><!-- END Panel-collapse -->
                </div><!-- END Panel -->
            <!-- END panel-group -->
                <br/>
                <br/>
                <br/>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;<input  type="submit" name="postsubmit" class="btn" style="background-color: #F26351;color: #FFFFFF; text-align:center;" value="Submit">
</form>
</BR>
</BR>
</BR>
</BR> 
</DIV>
</div>
</BR>
</BR>
</BR>
</BR>  
    
</body>
</html>


<?php

?>