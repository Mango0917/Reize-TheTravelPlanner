<?php
    //Start session
		 session_start();
		// 	echo $_SESSION['e_mail'];
			// echo $_SESSION['logged_in'];
    $lifetime=1440;
	 session_set_cookie_params($lifetime);
	//session_start();
  
  // 	echo $_SESSION['e_mail'];
 // if (!$_SESSION["logged_In"]) header("location:login.php");
   if(!isset($_SESSION['e_mail'])){
        header('Location: login.php');
			//	echo $_SESSION['e_mail'];
   }
?>
<?php include('config/setup.php'); ?>
<!DOCTYPE html>
<html
 <?php //if($page['id']==6){ echo 'ng-app="Exercises"'; } ?>
    <head>
    <title>DASHBOARD | <?php echo $site_name; ?></title>
    <meta charset="UTF-8">
    <link rel="icon" type="image" href="images/icon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
        <?php include('config/css.php'); ?><!-- CSS Files-->
        <?php include('config/js.php'); ?><!-- JavaScript Files-->
       
        <title><?php echo $page['title'].' | '.$site_name; ?></title>
        
        <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">

	<script src="assets/js/jquery-3.1.1.min.js"></script>
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
							<a href="index.php"><i class="ion-logo"> <img src="assets/images/logo.png" style="margin-left: 20px;"/> </i> </a></br>
			      <a class="navbar-brand" href="#" style="color:#F26351; font-weight:bold"><span class="brand-underline">REIZE</span></a>
			    </div>

			    <!-- Collect the nav links, forms, and other content for toggling-->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="margin-top: 10px;">

			      <ul class="nav navbar-nav navbar-right nav-heads">
                  <li><a href="INDEX.php" style="color:#F26351; font-weight:bold; font-size:1.3em;">HOME</a></li>
			       
			       <!--  <li><a href="flight.php" style="color:#FFFFFF; font-weight:bold">FLIGHTS</a></li>
			        <li><a href="hotel.php" style="color:#FFFFFF; font-weight:bold">HOTELS</a></li>
			        <li><a href="carrental.php" style="color:#FFFFFF; font-weight:bold">CAR RENTALS</a></li>
                    -->
							<li><a href="flight.php" style="color:#F26351; font-weight:bold; font-size:1.3em;">FLIGHTS</a></li>
			        <li><a href="carrental.php" style="color:#F26351; font-weight:bold; font-size:1.3em;">CAR RENTALS</a></li>
			        <li><a href="hotel.php" style="color:#F26351; font-weight:bold;  font-size:1.3em;">HOTELS</a></li>
							<li><a href="combo.php" style="color:#F26351; font-weight:bold; font-size:1.3em;">TRIP PLANNER</a></li>
							<li><a href="popular.php" style="color:#F26351; font-weight:bold; font-size:1.3em;">POPULAR</a></li>
							<li><a href="userprofile.php" style="color:#F26351; font-weight:bold;font-size:1.3em;">USER PROFILE</a></li>	
			        <li><a href="login.php" style="color:#F26351; font-weight:bold; font-size:1.3em;">LOGIN</a></li>
			      </ul>
			    </div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>
</br>		
</br>
</br>
</br>
</br>		
		
			
		
		
       
	
       

       
		<div class="container" style="background-color:#000080;  background-color: rgba(0, 0, 0, .5); width=300px; height=300px; border-radius: 25px;">
<BR>

          <h1 align="center" style="color:#FFFFFF; font-weight:bold;"> STATUS </h1>
					<hr/>
					 <div class="col-md-4 col-md-offset-5">
				        <label><h3 style="font-weight:bold;">Signed Up: <?php $name=$_SESSION['e_mail']; echo $name; ?></h3></script>  
								</br>
								</br>           
        </section><!-- End of feature2-->
        </div>
        
	
		
  
    <!-- <h1 class="text-center"><?php echo $page['title']; ?></h1>
    <div class="container">
        
  
    
<script src="assets/js/wow.js"></script>
		<script src="assets/js/app.js"></script>
</body>
</html>