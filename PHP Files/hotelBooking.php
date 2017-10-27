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
			        <li><a href="hotel.php" style="color:#F26351; font-weight:bold;  font-size:1.3em;"><span class="brand-underline">HOTELS</span></a></li>
					<li><a href="combo.php" style="color:#F26351; font-weight:bold; font-size:1.3em;">TRIP PLANNER</a></li>
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


/////
$id=$_GET['id'];
$inDate=$_GET['checkin'];
$outDate=$_GET['checkout'];
$c_name=$_GET['city'];
$State=$_GET['state'];
$numGuests=$_GET['num'];

$stmt="SELECT * FROM HOTEL where H_ID=$id";


$stid=oci_parse($conn,$stmt);
if( !oci_execute($stid) ) {
    $e = oci_error();
    echo htmlentities($e['message'], ENT_QUOTES);
	oci_close($conn);
} 
else {
    $row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS);    
	$noOfDays=ceil(abs((strtotime($outDate)-strtotime($inDate)))/86400);
	$phpPrice=$noOfDays*$row['PRICE']*$numGuests;
	$url=$row['H_URL'];
	$price=$row['PRICE'];
	$hName=$row['H_NAME'];
	$hStreet=$row['H_STREET'];
	
}

//oci_close($conn);


if (isset($_POST['postsubmit'])){

    $email=$_SESSION['e_mail'];
    $stmt="INSERT INTO HBOOKING VALUES('','$email',TO_DATE('$inDate'),TO_DATE('$outDate'),'$phpPrice',$id)";
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
     			alert("BOOKING CONFIRMED!"); 
  		</script>
        
		<?php
        /////
    }
    oci_close($conn);
}
///

?>
<div class="col-md-8 col-md-offset-3">
<form action="" method="post">
<label class="form-inline" style="color:#F26351; font-weight:bold;"><h3 style="color:#FFFFFF" >Name:</h3></label>
<label style="color:#F26351; "> <h3 style="color:#c5b291; font-weight:bold; font-size:1.3em;" ><?php echo $hName ?> </h3></label>
<BR/>
</br>
<label class="form-inline" style="color:#F26351; font-weight:bold;"><h3 style="color:#FFFFFF" >Address:</h3></label>
<label style="color:#F26351; "> <h3 style="color:#c5b291; font-weight:bold; font-size:1.3em;" ><?php echo $hStreet.", ".$c_name.", ".$State ?> </h3></label>
<BR/>
</br>
<label class="form-inline" style="color:#F26351; font-weight:bold;"><h3 style="color:#FFFFFF" >Checkin Date:</h3></label>
<label style="color:#F26351; "> <h3 style="color:#c5b291; font-weight:bold; font-size:1.3em;" ><?php echo $inDate ?> </h3></label>
<BR/>
<br/>
<label class="form-inline" style="color:#F26351; font-weight:bold;"><h3 style="color:#FFFFFF" >Checkout Date:</h3></label>
<label style="color:#F26351;"> <h3 style="color:#c5b291; font-weight:bold; font-size:1.3em;" ><?php echo $outDate ?> </h3></label>
<BR/>
<br/>
<label class="form-inline" style="color:#F26351; font-weight:bold;"><h3 style="color:#FFFFFF" >Number of Rooms:</h3></label>
<label style="color:#F26351; "><h3 style="color:#c5b291; font-weight:bold; font-size:1.3em;" > <?php echo $numGuests ?></h3> </label>
<br/>
<br/>
<label class="form-inline" style="color:#F26351; font-weight:bold;"><h3 style="color:#FFFFFF" >Total Price:</h3></label>
<label style="color:#F26351; "> <h3 style="color:#c5b291; font-weight:bold; font-size:1.3em;" ><?php echo $noOfDays." * ".$numGuests." * $".$price." = $".$phpPrice ?> </h3></label>
<br/>
<br/>
<label class="form-inline" style="color:#F26351; font-weight:bold;"><h3 style="color:#FFFFFF" >URL:</h3></label>
<label style="color:#F26351; "> <h3 style="color:#c5b291; font-weight:bold; font-size:1.3em;" ><?php echo $url ?></h3> </label>
<br/>

<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input  type="submit" name="postsubmit" class="btn" style="background-color: #F26351;color: #FFFFFF; text-align:center;" value="Submit">
</br>
</br>
</form>
</div>
  
  </div>

    </br>
  </br>
  </br>
   </br>
  </br>
  </br>
</body>
</html>


<?php

?>