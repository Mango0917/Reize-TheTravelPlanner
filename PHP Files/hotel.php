<?php   
 include('config/db_connection.php'); 
 //Start session:
  //  session_start();
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

<?php include('config/setup.php'); ?>
<?php include('config/setup.php'); ?>


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
 <h1 align="center" style="color:#FFFFFF; font-weight:bold;"> HOTELS </h1>
        <hr/>
<div class="col-md-4 col-md-offset-4">
<div class="form-group">
<form action="" method="post">
<label class="form-inline" style="color:#F26351; font-weight:bold;"><h3 style="color:#FFFFFF" >CITY:</h3></label>
<input id="C_NAME" style:"color:#000000;" class="form-control"type="text" name="C_NAME" required>
<BR/>
<label class="form-inline" style="color:#F26351; font-weight:bold;"><h3 style="color:#FFFFFF" >STATE:</h3></label>
<input id="STATE" style:"color:#000000;" class="form-control"type="text" name="STATE" required>
<BR/>
<label class="form-inline" style="color:#F26351; font-weight:bold;"><h3 style="color:#FFFFFF" >CHECK IN:</h3></label>
<input id="CHECKIN" style:"color:#000000;" class="form-control"type="date" name="CHECKIN" required>
<BR/>
<label class="form-inline" style="color:#F26351; font-weight:bold"><h3 style="color:#FFFFFF" >CHECK OUT:</h3></label>
<input id="CHECKOUT" style:"color:#000000" class="form-control" type="date" name="CHECKOUT" required>
<BR/>
<label class="form-inline" style="color:#F26351; font-weight:bold"><h3 style="color:#FFFFFF" >NUMBER OF ROOM:</h3></label>
<input id="NUMBEROFGUESTS" style:"color:#000000" class="form-control" type="number_format" name="NUMBEROFGUESTS" required>
<br/>



<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input  type="submit" name="postsubmit" class="btn" style="background-color: #F26351;color: #FFFFFF; text-align:center;" value="Submit">
<br><br>
</form>
</div>
</div>
<?php

if (isset($_POST['postsubmit'])){
$C_NAME=$_POST['C_NAME'];
$STATE=$_POST['STATE'];
$CHECKIN=$_POST['CHECKIN'];
$CHECKOUT=$_POST['CHECKOUT'];
$NUMBEROFGUESTS=$_POST['NUMBEROFGUESTS'];
//$C_NAME=$_POST[C_NAME];
//if(isset($_POST['submit'])){
// echo '<tr><td>'.'MEALS'." </td><td>  &nbsp;&nbsp;</td><td>     ".'CALORIES'.'</td></tr>';
//$sql="SELECT FL_ID FROM FLIGHTS WHERE SRC_C_ID=(select C_ID from CITY where C_NAME=$C_NAME) AND DEST_C_ID=(SELECT C_ID FROM CITY WHERE D_NAME=$D_NAME) AND DEP_DATE= $DEP_DATE AND $NO_OF_PASSENGERS<= SEATS;
//$stmt="SELECT FL_NAME,FL_ID,PRICE,DEP_DATE,DEP_TIME,AR_DATE,AR_TIME,FL_DURATION,S_AIRPORT,D_AIRPORT FROM FLIGHTS WHERE SRC_C_ID=(SELECT C_ID FROM CITY WHERE C_NAME='$C_NAME') and DEST_C_ID=(SELECT C_ID FROM CITY WHERE C_NAME='$D_NAME') and DEP_DATE='$DEP_DATE'";
//$stmt="SELECT CAR.MODEL_NAME, CAR.MAKE, CAR.MODEL_YEAR, CAR.MILEAGE,CAR.CAR_CATEGORY_NAME,(TO_DATE('03-May-2017')-TO_DATE('01-May-2017'))*CAR_CATEGORY.COST_PER_DAY AS PRICE FROM CAR,CAR_CATEGORY WHERE CAR.CAR_CATEGORY_NAME='ECONOMY' AND CAR.CAR_CATEGORY_NAME=CAR_CATEGORY.CATEGORY_NAME";
$stmt="SELECT HOTEL.H_ID,HOTEL.H_NAME,CITY.C_NAME,HOTEL.H_STREET,(TO_DATE('$CHECKOUT')-TO_DATE('$CHECKIN'))*PRICE*'$NUMBEROFGUESTS',HOTEL.CUS_RATING,HOTEL.RATING,H_URL FROM HOTEL,CITY WHERE HOTEL.H_CITY=CITY.C_ID AND HOTEL.H_CITY=(SELECT C_ID FROM CITY WHERE C_NAME='$C_NAME')";
$stid=oci_parse($conn,$stmt);
if( !oci_execute($stid) ) {
    $e = oci_error();
    echo htmlentities($e['message'], ENT_QUOTES);
	oci_close($conn);
} 
else {
	// retrieve the results
?>
	<div class="col-md-6 col-md-offset-0">
	<table cols=9 border=3 style="color:#FFFFFF;    border:1px solid #FFFFFF "  >
    <tr style="border:1px solid #FFFFFF; padding: 5px;">

	<label style="color:#F26351;"><h3 style="color:#F26351; font-weight:bold;"><th style="border:1px solid #FFFFFF; padding: 5px;font-weight:bold;">Hotel ID</th></h3></label>
	<label style="color:#F26351;"><h3 style="color:#F26351; font-weight:bold;"><th style="border:1px solid #FFFFFF; padding: 5px;font-weight:bold;">Hotel Name</th></h3></label>
	<label style="color:#F26351;"><h3 style="color:#F26351; font-weight:bold;"><th style="border:1px solid #FFFFFF; padding: 5px;font-weight:bold;">City Name</th></h3></label>
	<label style="color:#F26351;"><h3 style="color:#F26351; font-weight:bold;"><th style="border:1px solid #FFFFFF; padding: 5px;font-weight:bold;">Hotel Address</th></h3></label>
		
	<label style="color:#F26351;"><h3 style="color:#F26351; font-weight:bold;"><th style="border:1px solid #FFFFFF; padding: 5px;font-weight:bold;">Price</th></h3></label>

	<label style="color:#F26351;"><h3 style="color:#F26351; font-weight:bold;"><th style="border:1px solid #FFFFFF; padding: 5px;font-weight:bold;">Customer Rating</th></h3></label>
    <label style="color:#F26351;"><h3 style="color:#F26351; font-weight:bold;"><th style="border:1px solid #FFFFFF; padding: 5px;font-weight:bold;">Hotel Rating</th></h3></label>
	<label style="color:#F26351;"><h3 style="color:#F26351; font-weight:bold;"><th style="border:1px solid #FFFFFF; padding: 5px;font-weight:bold;">URL</th></h3></label>
	<label style="color:#F26351;"><h3 style="color:#F26351; font-weight:bold;"><th style="border:1px solid #FFFFFF; padding: 5px;font-weight:bold;">Book</th></h3></label>

	</tr>
	<?php
	while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
    

		echo "<tr>\n";
    	foreach ($row as $item) {
        	echo '<label style="color:#FFFFFF; "><h3 style="color:#FFFFFF">    <td style="border:1px solid #FFFFFF; padding: 5px; font-weight:bold;">' . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") ."</td></h3></label>";
			
    	}
		$hID=$row['H_ID'];
	
		echo "<td style='border:1px solid #FFFFFF; padding: 10px; font-weight:bold;  width: 50px;'><div style='width: 50px' solid #b88882><a href='hotelBooking.php?id={$hID} & num={$NUMBEROFGUESTS} & checkin={$CHECKIN} & checkout={$CHECKOUT} & city={$C_NAME} & state={$STATE}' style='font-weight:bold; color: white;'>BOOK</a></div></td>";
    	echo "</tr>";
		
	}
		echo "</table>";
		echo "</br>";
		echo "</br>";
		
					echo "	</div>";
}
oci_close($conn);
}
?>













<br/>
</div>
</div>
<br/>
<br/>
<br/>


  
    
</body>
</html>


<?php

?>