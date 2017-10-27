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
   // echo "EEEEEEMAILLL".$email;

    $stmt="SELECT * FROM CUSTOMER where E_MAIL='$email'";

    $stid=oci_parse($conn,$stmt);
    if( !oci_execute($stid) ) {
        $e = oci_error();
        echo htmlentities($e['message'], ENT_QUOTES);
        oci_close($conn);
    } 
    else {
        $row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS);    

       // echo "ROWWWW".oci_num_rows($stid);
        $fname=$row['F_NAME'];
       // echo "Firstt".$fname;
        //echo 
        $lname=$row['L_NAME'];
        $phone=$row['CUS_PHONE'];
    }

    //oci_close($conn);
?>

<?php
  /*  $email=$_SESSION['e_mail'];
   // echo "EEEEEEMAILLL".$email;

    $stmt=" SELECT DISTINCT
       FIRST_VALUE(C_NAME)
          OVER(PARTITION BY THEME_ID
               ORDER BY POPULARITY desc) AS CITY ,T_NAME,FIRST_VALUE(C_POI)
          OVER(PARTITION BY THEME_ID
               ORDER BY POPULARITY desc) AS POI
FROM   (SELECT C2.C_NAME,C2.THEME_ID,C2.POPULARITY,T1.T_NAME,C2.C_POI FROM CITY C1, CITY C2, THEMES T1 
   WHERE C1.THEME_ID=C2.THEME_ID AND T1.T_ID=C2.THEME_ID AND C1.C_ID IN   
  (SELECT FLIGHTS.DEST_C_ID FROM FLIGHTS,FBOOKING 
  WHERE FLIGHTS.FL_ID=FBOOKING.FL_ID AND FLIGHTS.FL_NAME=FBOOKING.FL_NAME AND FLIGHTS.DEP_DATE=FBOOKING.DEP_DATE AND FLIGHTS.DEP_TIME=FBOOKING.DEP_TIME AND FBOOKING.E_MAIL='$email'
  UNION
  SELECT HOTEL.H_CITY FROM HOTEL,HBOOKING 
  WHERE HOTEL.H_ID=HBOOKING.H_ID AND HBOOKING.E_MAIL='$email))";

    $stid=oci_parse($conn,$stmt);
    if( !oci_execute($stid) ) {
        $e = oci_error();
        echo htmlentities($e['message'], ENT_QUOTES);
        oci_close($conn);
    } 
    else {

        $row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS);
     //   echo oci_num_rows($stid);    
        while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {


					echo "<tr>\n";
					$VALUE=NULL;
					foreach ($row as $item) {
						//echo '<label style="color:#F26351; "><h3 style="color:#F26351">    <td style="border:1px solid #FFFFFF; padding: 5px; font-weight:bold;">'. ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") ."</td></h3></label>";
						
						
					}
					
					//echo '<td><a href="try.php?row1="'.$VALUE.' method="GET">Book</a>'. "</td>\n";
					

					//<td style="border:1px solid #FFFFFF; padding: 10px; font-weight:bold;  width: 50px;"><div style="width: 100px" ><a href="try.php?id={$ID}&date={$DDATE}&time={$DEPTIME}&name={$FNAME}&num={$NO_OF_PASSENGERS}">BOOK NOW</a></td>
					//</tr>
				
					
				
				}

    }

  //  oci_close($conn);*/
?>
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
					<li><a href="combo.php" style="color:#F26351; font-weight:bold; font-size:1.3em;">TRIP PLANNER</a></li>
					<li><a href="popular.php" style="color:#F26351; font-weight:bold; font-size:1.3em;"><span class="brand-underline">POPULAR</span></a></li>
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
 <h1 align="center" style="color:#FFFFFF; font-weight:bold;"> TOP DESTINATIONS </h1>
        <hr/>
 <div class="col-md-8 col-md-offset-2">
        <br/>
        <br/> 
        <br/>
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-info" style="color:#005b7f;">
                    <div class="panel-heading" role="tab" id="headingOne" style="background-color:005b7f;">
                        <h4 class="panel-title"> 

                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                <h2 class="text-center" style="font-weight:bold;">Beaches</h2>
                            </a>
                        </h4>
                    </div><!-- END panel-heading -->
                <div id="collapseOne" class="panel-collapse collapse in"  style="background-color:#000070;  background-color: rgba(0, 0, 0, .7);" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">
                <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <form action="login.php" method="post">
                                <?php
                                    $email=$_SESSION['e_mail'];
                                    

                                    $stmt="SELECT TEMP.C_NAME, TEMP.C_STATE ,TEMP.C_POI FROM
                                    (SELECT * FROM CITY
                                    WHERE THEME_ID=3
                                    ORDER BY POPULARITY DESC ) TEMP
                                    WHERE rownum <= 5";

                                    $stid=oci_parse($conn,$stmt);
                                    if( !oci_execute($stid) ) {
                                        $e = oci_error();
                                        
                                        oci_close($conn);
                                    } 
                                    else {
                                ?>
                                    
                                    <table cols=7 border=3 style="color:#FFFFFF;  cellspacing=1; cellpadding=1;  border:1px solid #FFFFFF; "  >
                                    <tr style="border:1px solid #FFFFFF; padding: 5px;">
                                    <label style="color:#F26351;"><h3 style="color:#F26351; font-weight:bold;"><th style="border:1px solid #FFFFFF; padding: 5px;font-weight:bold;">CITY</th></h3></label>
                                    <label style="color:#F26351; "><h3 style="color:#F26351;  font-weight:bold;"><th style="border:1px solid #FFFFFF; padding: 5px;font-weight:bold;">STATE</th></h3></label>
                                    <label style="color:#F26351; "><h3 style="color:#F26351;  font-weight:bold;"><th style="border:1px solid #FFFFFF; padding: 5px;font-weight:bold;"><div style="width: 250px;" >POINTS OF INTEREST</div></th></h3></label>

                                    </tr>
                                <?php
                                    while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
                                    

                                        echo "<tr >\n";
                                        $VALUE=NULL;
                                        foreach ($row as $item) {

                                            echo '<label style="color:#FFFFFF; "><h3 style="color:#FFFFFF">    <td style="border:1px solid #FFFFFF; padding: 5px; font-weight:bold;">' . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") ."</td></h3></label>";
                                            
                                            
                                        }
                                                                                    }
                                    }
                                    echo "</table>";
// oci_close($conn);
                            ?>
                            
                        </div><!-- END column -->
                    </div><!-- END row -->
                </div><!-- END panel-body -->
            </div><!-- END panel-collapse -->
        </div><!-- END panel -->
            
                <br/>
                <br/>
                <br/>
                <div class="panel panel-info" style="color:#A2CA28;">
                    <div class="panel-heading" role="tab" id="headingTwo" style="background-color:#A2CA28;">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <h2 class="text-center" style="font-weight:bold;">Nightlife</h2>
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"  style="background-color:#000070;  background-color: rgba(0, 0, 0, .7);" aria-labelledby="headingTwo">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <?php
                                            $email=$_SESSION['e_mail'];
                                           

                                            $stmt="SELECT TEMP.C_NAME, TEMP.C_STATE, TEMP.C_POI FROM
                                            (SELECT * FROM CITY
                                            WHERE THEME_ID=8
                                            ORDER BY POPULARITY DESC ) TEMP
                                            WHERE rownum <= 5";

                                            $stid=oci_parse($conn,$stmt);
                                            if( !oci_execute($stid) ) {
                                                $e = oci_error();
                                              
                                                oci_close($conn);
                                            } 
                                            else {
                                                ?>
                                         
                                            <table cols=3 border=3 style="color:#FFFFFF;  cellspacing=1; cellpadding=1;  border:1px solid #FFFFFF; "  >
                                            <tr style="border:1px solid #FFFFFF; padding: 5px;">
                                             <label style="color:#F26351;"><h3 style="color:#F26351; font-weight:bold;"><th style="border:1px solid #FFFFFF; padding: 5px;font-weight:bold;">CITY</th></h3></label>
                                            <label style="color:#F26351; "><h3 style="color:#F26351;  font-weight:bold;"><th style="border:1px solid #FFFFFF; padding: 5px;font-weight:bold;">STATE</th></h3></label>
                                              <label style="color:#F26351; "><h3 style="color:#F26351;  font-weight:bold;"><th style="border:1px solid #FFFFFF; padding: 10px;font-weight:bold;"><div style="width: 250px;" >POINTS OF INTEREST</div></th></h3></label>   
                                            </tr>
                                            <?php
                                            while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
                                            

                                                echo "<tr >\n";
                                                $VALUE=NULL;
                                                foreach ($row as $item) {

                                                    echo '<label style="color:#FFFFFF; "><h3 style="color:#FFFFFF">    <td style="border:1px solid #FFFFFF; padding: 5px; font-weight:bold;">' . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") ."</td></h3></label>";
                                                    
                                                    
                                                }

                                            ?>
                                                
                                            </tr>
             

                                            <?php   
                                            }
                                          }
                                            echo "</table>";
  // oci_close($conn);
                                    ?>

                                <!-- END column -->
                            </div><!-- END row -->
                        </div><!-- END Panel-body -->
                    </div><!-- END Panel-collapse -->
                </div><!-- END Panel -->
            </div><!-- END panel-group -->

                <br/>
                <br/>
                <br/>

                
                <div class="panel panel-info" style="color:#A2CA28;">
                    <div class="panel-heading" role="tab" id="headingFour" style="background-color:#A2CA28;">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <h2 class="text-center" style="font-weight:bold;">Shopping</h2>
                            </a>
                        </h4>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" style="background-color:#000070;  background-color: rgba(0, 0, 0, .7);"  aria-labelledby="headingTwo">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <?php
                                            $email=$_SESSION['e_mail'];
                                           

                                            $stmt="SELECT TEMP.C_NAME, TEMP.C_STATE, TEMP.C_POI FROM
                                            (SELECT * FROM CITY
                                            WHERE THEME_ID=2
                                            ORDER BY POPULARITY DESC ) TEMP
                                            WHERE rownum <= 5";

                                            $stid=oci_parse($conn,$stmt);
                                            if( !oci_execute($stid) ) {
                                                $e = oci_error();
                                              
                                                oci_close($conn);
                                            } 
                                            else {
                                                ?>
                                         
                                            <table cols=7 border=3 style="color:#FFFFFF;  cellspacing=1; cellpadding=1;  border:1px solid #FFFFFF; "  >
                                            <tr style="border:1px solid #FF0000; padding: 5px;">
                                             <label style="color:#F26351;"><h3 style="color:#F26351; font-weight:bold;"><th style="border:1px solid #FFFFFF; padding: 5px;font-weight:bold;">CITY</th></h3></label>
                                            <label style="color:#F26351; "><h3 style="color:#F26351;  font-weight:bold;"><th style="border:1px solid #FFFFFF; padding: 5px;font-weight:bold;">STATE</th></h3></lab
                                              <label style="color:#F26351; "><h3 style="color:#F26351;  font-weight:bold;"><th style="border:1px solid #FFFFFF; padding: 5px;font-weight:bold;"><div style="width: 250px;" >POINTS OF INTEREST</div></th></h3></label>

                                            </tr>
                                            <?php
                                            while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
                                            

                                                echo "<tr >\n";
                                                $VALUE=NULL;
                                                foreach ($row as $item) {

                                                    echo '<label style="color:#F26351; "><h3 style="color:#F26351">    <td style="border:1px solid #FFFFFF; padding: 5px; font-weight:bold;">' . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") ."</td></h3></label>";
                                                    
                                                    
                                                }

                                                ?>
                                           
                                            </tr>
             

                                            <?php   
                                            }
                                          }
                                            echo "</table>";
  // oci_close($conn);
                                    ?>

                                <!-- END column -->
                            </div><!-- END row -->
                        </div><!-- END Panel-body -->
                    </div><!-- END Panel-collapse -->
                </div><!-- END Panel -->
            </div><!-- END panel-group -->
                <br/>
                <br/>
                <br/>

  <div class="panel panel-info" style="color:#A2CA28;">
                    <div class="panel-heading" role="tab" id="headingSeven" style="background-color:#A2CA28;">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                <h2 class="text-center" style="font-weight:bold;">Adventure</h2>
                            </a>
                        </h4>
                    </div>
                    <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" style="background-color:#000070;  background-color: rgba(0, 0, 0, .7);"  aria-labelledby="headingSeven">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
<?php
                                            $email=$_SESSION['e_mail'];
                                           

                                            $stmt="SELECT TEMP.C_NAME, TEMP.C_STATE , TEMP.C_POI FROM
                                            (SELECT * FROM CITY
                                            WHERE THEME_ID=5
                                            ORDER BY POPULARITY DESC ) TEMP
                                            WHERE rownum <= 5";

                                            $stid=oci_parse($conn,$stmt);
                                            if( !oci_execute($stid) ) {
                                                $e = oci_error();
                                              
                                                oci_close($conn);
                                            } 
                                            else {
                                                ?>
                                         
                                            <table cols=7 border=3 style="color:#FFFFFF;  cellspacing=1; cellpadding=1;  border:1px solid #FFFFFF; "  >
                                            <tr style="border:1px solid #FFFFFF; padding: 5px;">
                                             <label style="color:#F26351;"><h3 style="color:#F26351; font-weight:bold;"><th style="border:1px solid #FFFFFF; padding: 5px;font-weight:bold;">CITY</th></h3></label>
                                            <label style="color:#F26351; "><h3 style="color:#F26351;  font-weight:bold;"><th style="border:1px solid #FFFFFF; padding: 5px;font-weight:bold;">STATE</th></h3></lab
                                             <label style="color:#F26351; "><h3 style="color:#F26351;  font-weight:bold;"><th style="border:1px solid #FFFFFF; padding: 5px;font-weight:bold;"><div style="width: 250px;" >POINTS OF INTEREST</div></th></h3></label>

                                            </tr>
                                            <?php
                                            while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
                                            

                                                echo "<tr >\n";
                                                $VALUE=NULL;
                                                foreach ($row as $item) {

                                                    echo '<label style="color:#F26351; "><h3 style="color:#F26351">    <td style="border:1px solid #FFFFFF; padding: 5px; font-weight:bold;">' . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") ."</td></h3></label>";
                                                    
                                                    
                                                }
                                       
                                            }
                                          }
                                            echo "</table>";
                                             
  // oci_close($conn);
                                    ?>                                    
                                    
                                    
                                    
                             </div><!-- END column -->
                            </div><!-- END row -->
                        </div><!-- END Panel-body -->
                    </div><!-- END Panel-collapse -->
                </div><!-- END Panel -->
              
            </div><!-- END panel-group -->
               <br/>
                <br/>
                

  <div class="panel panel-info" style="color:#A2CA28;">
                    <div class="panel-heading" role="tab" id="headingSix" style="background-color:#A2CA28;">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                <h2 class="text-center" style="font-weight:bold;">Nature</h2>
                            </a>
                        </h4>
                    </div>
                    <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" style="background-color:#000070;  background-color: rgba(0, 0, 0, .7);"  aria-labelledby="headingSix">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
<?php
                                            $email=$_SESSION['e_mail'];
                                           

                                            $stmt="SELECT TEMP.C_NAME, TEMP.C_STATE, TEMP.C_POI FROM
                                            (SELECT * FROM CITY
                                            WHERE THEME_ID=6
                                            ORDER BY POPULARITY DESC ) TEMP
                                            WHERE rownum <= 5";

                                            $stid=oci_parse($conn,$stmt);
                                            if( !oci_execute($stid) ) {
                                                $e = oci_error();
                                              
                                                oci_close($conn);
                                            } 
                                            else {
                                                ?>
                                         
                                            <table cols=7 border=3 style="color:#FFFFFF;  cellspacing=1; cellpadding=1;  border:1px solid #FFFFFF; "  >
                                            <tr style="border:1px solid #FFFFFF; padding: 5px;">
                                             <label style="color:#F26351;"><h3 style="color:#F26351; font-weight:bold;"><th style="border:1px solid #FFFFFF; padding: 5px;font-weight:bold;">CITY</th></h3></label>
                                            <label style="color:#F26351; "><h3 style="color:#F26351;  font-weight:bold;"><th style="border:1px solid #FFFFFF; padding: 5px;font-weight:bold;">STATE</th></h3></label>
                                             <label style="color:#F26351; "><h3 style="color:#F26351;  font-weight:bold;"><th style="border:1px solid #FFFFFF; padding: 5px;font-weight:bold;"><div style="width: 250px;" >POINTS OF INTEREST</div></th></h3></label>

                                            </tr>
                                            <?php
                                            while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
                                            

                                                echo "<tr >\n";
                                                $VALUE=NULL;
                                                foreach ($row as $item) {

                                                    echo '<label style="color:#F26351; "><h3 style="color:#F26351">    <td style="border:1px solid #FFFFFF; padding: 5px; font-weight:bold;">' . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") ."</td></h3></label>";
                                                    
                                                    
                                                }
                                       
                                            }
                                          }
                                            echo "</table>";
                                             
  // oci_close($conn);
                                    ?>                                    
                                    
                                    
                                    
                             </div><!-- END column -->
                            </div><!-- END row -->
                        </div><!-- END Panel-body -->
                    </div><!-- END Panel-collapse -->
                </div><!-- END Panel -->
              
            </div><!-- END panel-group -->
            <br/>
            <br/>
                

        </div>        
        </div>
       <br/>
        <br/>
        <br/>
        <br/>

</div>
  
    
</body>
</html>


<?php

?>