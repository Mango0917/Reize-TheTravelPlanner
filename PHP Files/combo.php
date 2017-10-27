<?php   
 include('config/db_connection.php'); 
 //Start session:
 session_start();
 //$lifetime=1440;
   // session_set_cookie_params($lifetime);
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
			      </br><a class="navbar-brand" href="index.php" style="color:#FFFFFF; font-weight:bold"><span class="brand-underline">REIZE</span></a>
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
 <h1 align="center" style="color:#FFFFFF; font-weight:bold;"> TRIP PLANNER </h1>
        <hr/>
<div class="col-md-4 col-md-offset-4">
            <form action="" method="post">
            <label class="form-inline" style="color:#F26351; font-weight:bold;"><h3 style="color:#FFFFFF" >FROM:</h3></label>
            <input id="C_NAME" style:"color:#000000;" class="form-control"type="text" name="C_NAME" required>
            <BR/>
            <label class="form-inline" style="color:#F26351; font-weight:bold;"><h3 style="color:#FFFFFF" >TO:</h3></label>
            <input id="D_NAME" style:"color:#000000;" class="form-control"type="text" name="D_NAME" required>
            <BR/>
            <label class="form-inline" style="color:#F26351; font-weight:bold"><h3 style="color:#FFFFFF" >DATE OF DEPARTURE:</h3></label>
            <input id="DEP_DATE" style:"color:#000000" class="form-control" type="text" name="DEP_DATE" required>
            <BR/>
            <label class="form-inline" style="color:#F26351; font-weight:bold"><h3 style="color:#FFFFFF" >DATE OF RETURN:</h3></label>
            <input id="DEP_RETURN" style:"color:#000000" class="form-control" type="text" name="DEP_RETURN" required>
            <BR/>
            <label class="form-inline" style="color:#F26351; font-weight:bold"><h3 style="color:#FFFFFF" >NUMBER OF PASSENGERS:</h3></label>
            <input id="NO_OF_PASSENGERS" style:"color:#000000" class="form-control" type="number_format" name="NO_OF_PASSENGERS" required>          
            <br/>
            <label class="form-inline" style="color:#F26351; font-weight:bold"><h3 style="color:#FFFFFF" >BUDGET UNDER (USD):</h3></label>
            <input id="BUDGET_UNDER" style:"color:#000000" class="form-control" type="number_format" name="BUDGET_UNDER" required>
            </BR>
            </BR>
            	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="postsubmit" class="btn" style="background-color: #F26351;color: #FFFFFF;" value="Submit">
</BR>
</BR>
</div>
<?php
				if (isset($_POST['postsubmit'])){
				$S_NAME=$_POST['C_NAME'];
				$D_NAME=$_POST['D_NAME'];
				$DEP_DATE=$_POST['DEP_DATE'];
				$RET_DATE=$_POST['DEP_RETURN'];
				$BUDGET=$_POST['BUDGET_UNDER'];
				$NO_OF_PASSENGERS=$_POST['NO_OF_PASSENGERS'];
				
				$stmt="SELECT * FROM(SELECT F1.FL_ID as SRC_ID, F1.FL_NAME as SRC_NAME, F1.DEP_TIME AS SRC_TIME, H1.H_ID, H1.H_NAME, H1.H_STREET,F2.FL_ID as DES_ID, F2.FL_NAME as DES_NAME, F2.DEP_TIME AS DES_TIME, ((F1.PRICE+F2.PRICE)*$NO_OF_PASSENGERS+(H1.PRICE*(TO_DATE('03-MAY-2017')-TO_DATE('01-MAY-2017')))) AS TOTAL_PRICE FROM FLIGHTS F1,HOTEL H1, FLIGHTS F2 
WHERE F1.DEP_DATE=TO_DATE('$DEP_DATE') AND F2.DEP_DATE=TO_DATE('$RET_DATE') AND (((F1.PRICE+F2.PRICE)*$NO_OF_PASSENGERS)+(H1.PRICE*(TO_DATE('03-MAY-2017')-TO_DATE('01-MAY-2017'))))<$BUDGET AND F1.SRC_C_ID=F2.DEST_C_ID 
AND F1.SRC_C_ID=(SELECT C_ID FROM CITY WHERE C_NAME='$S_NAME') AND F2.SRC_C_ID=F1.DEST_C_ID 
AND F1.SEATS>$NO_OF_PASSENGERS AND F2.SEATS>$NO_OF_PASSENGERS AND F2.SRC_C_ID=(SELECT C_ID FROM CITY WHERE C_NAME='$D_NAME') AND H1.H_CITY=F2.SRC_C_ID ORDER BY TOTAL_PRICE)
WHERE ROWNUM<=10";
				$stid=oci_parse($conn,$stmt);
				if( !oci_execute($stid) ) {
				$e = oci_error();
				echo htmlentities($e['message'], ENT_QUOTES);
				oci_close($conn);
				} 
				else {
					?>
						<div class="col-md-8 col-md-offset-0">
						<table cols=8 border=3 style="color:#FFFFFF;    border:1px solid #FFFFFF; "  >
                		<tr style="border:1px solid #FFFFFF; padding: 5px;">
						<label style="color:#F26351;"><h3 style="color:#F26351; font-weight:bold;"><th style="border:1px solid #FFFFFF; padding: 5px;font-weight:bold;">Source Flight ID</th></h3></label>
						<label style="color:#F26351;"><h3 style="color:#F26351; font-weight:bold;"><th style="border:1px solid #FFFFFF; padding: 5px;font-weight:bold;">Source Flight Name</th></h3></label>
						<label style="color:#F26351;"><h3 style="color:#F26351; font-weight:bold;"><th style="border:1px solid #FFFFFF; padding: 5px;font-weight:bold;">Source Dep Time</th></h3></label>
						<label style="color:#F26351;"><h3 style="color:#F26351; font-weight:bold;"><th style="border:1px solid #FFFFFF; padding: 5px;font-weight:bold;">HOTEL ID</th></h3></label>
						<label style="color:#F26351;"><h3 style="color:#F26351; font-weight:bold;"><th style="border:1px solid #FFFFFF; padding: 5px;font-weight:bold;"><div style="width: 200px" >Hotel Name</div></th></h3></label>
						<label style="color:#F26351;"><h3 style="color:#F26351; font-weight:bold;"><th style="border:1px solid #FFFFFF; padding: 5px;font-weight:bold;"><div style="width: 150px" >Hotel Address</div></th></h3></label>
						<label style="color:#F26351;"><h3 style="color:#F26351; font-weight:bold;"><th style="border:1px solid #FFFFFF; padding: 5px;font-weight:bold;">Destination Flight ID</th></h3></label>
						<label style="color:#F26351;"><h3 style="color:#F26351; font-weight:bold;"><th style="border:1px solid #FFFFFF; padding: 5px;font-weight:bold;">Destinaton Flight Name</th></h3></label>
						<label style="color:#F26351;"><h3 style="color:#F26351; font-weight:bold;"><th style="border:1px solid #FFFFFF; padding: 5px;font-weight:bold;">Destinaton Dep Time</th></h3></label>
						<label style="color:#F26351;"><h3 style="color:#F26351; font-weight:bold;"><th style="border:1px solid #FFFFFF; padding: 5px;font-weight:bold;">Total Price</th></h3></label>
						<label style="color:#F26351;"><h3 style="color:#F26351; font-weight:bold;"><th style="border:1px solid #FFFFFF; padding: 5px;font-weight:bold;">Book</th></h3></label>
					</tr>
				<?php
					while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {


					echo "<tr>\n";
					$VALUE=NULL;
					foreach ($row as $item) {
						echo '<label style="color:#FFFFFF; "><h3 style="color:#FFFFFF">    <td style="border:1px solid #FFFFFF; padding: 5px; font-weight:bold;">'. ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") ."</td></h3></label>";
						
						
					}
					$hID=$row['H_ID'];
					$src_id=$row['SRC_ID'];
					$dest_id=$row['DES_ID'];
					$src_name=$row['SRC_NAME'];
					$dest_name=$row['DES_NAME'];
					$src_time=$row['SRC_TIME'];
					$dest_time=$row['DES_TIME'];
					$tprice=$row['TOTAL_PRICE'];
					
					echo"<td><a href='comboBooking.php?hid={$hID}&src_id={$src_id}&dest_id={$dest_id}&src_name={$src_name}&dest_name={$dest_name}&dep_date={$DEP_DATE}&ret_date={$RET_DATE}&src_time={$src_time}&dest_time={$dest_time}&num={$NO_OF_PASSENGERS}&tprice={$tprice}'style='color:white; font-weight:bold;'>BOOK NOW</a></td>";
					echo "</tr>";
				
				}
					echo "	</table>";
					echo "</br>";
					echo "</br>";
						echo "	</div>";
			}
		}
?>


<br/>



</div>
</br>
</br>
</div>
  
    
</body>
</html>


