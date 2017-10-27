
<?php include('config/setup.php');
$_SESSION['logged_in']=false;
 ?>

 <?php


/////
$stmt="SELECT TEMP.C_NAME, TEMP.C_STATE, TEMP.POPULARITY FROM (SELECT * FROM CITY ORDER BY POPULARITY DESC) TEMP WHERE rownum <= 5";

$stid=oci_parse($conn,$stmt);
if( !oci_execute($stid) ) {
    $e = oci_error();
    echo htmlentities($e['message'], ENT_QUOTES);
	oci_close($conn);
} 
else {
    $row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS);    
	
    
}

	oci_close($conn);
?>
<!DOCTYPE html>
<html 

<?php //if($page['id']==6){ echo 'ng-app="Exercises"'; } ?>
    <head>
    <title>HOME | <?php echo $site_name; ?></title>
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
<body>
    <header id="landing">
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
							<a href= "index.php"> <i class="ion-logo"> <img src="assets/images/logo.png" style="margin-left: 20px;"/> </i> </a><br/>
			      <a class="navbar-brand" href="#" style="color:#FFFFFF; font-weight:bold">&nbsp;&nbsp;&nbsp;<span class="brand-underline">&nbsp;Reize</span> </a>
			    </div>

			    <!-- Collect the nav links, forms, and other content for toggling-->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="margin-top: 10px;">

			      <ul class="nav navbar-nav navbar-right nav-heads">
			       	        <li><a href="flight.php" style="color:#F26351; font-weight:bold; font-size:1.3em;">FLIGHTS</a></li>
			        <li><a href="carrental.php" style="color:#F26351; font-weight:bold; font-size:1.3em;">CAR RENTALS</a></li>
			        <li><a href="hotel.php" style="color:#F26351; font-weight:bold;  font-size:1.3em;">HOTELS</a></li>
					<li><a href="combo.php" style="color:#F26351; font-weight:bold; font-size:1.3em;">TRIP PLANNER</a></li>
					<li><a href="popular.php" style="color:#F26351; font-weight:bold; font-size:1.3em;">POPULAR</a></li>
						<li><a href="userprofile.php" style="color:#F26351; font-weight:bold;font-size:1.3em;">USER PROFILE</a></li>					
			        <li><a href="login.php" style="color:#F26351; font-weight:bold;font-size:1.3em;">LOGIN/ SIGN UP</a></li>
			      </ul>
			    </div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>

			<div class="container">
				<div class="landing-caption">
					<h1><span class="caption-slash" style="font-weight:bold;">the travel planner</span></h1>
					<p class="caption-paragraph"> you always wanted<span class="caption-paragraph-slash"></span></p>
				</div>
			</div>
		</header><!-- End of landing -->
		<div class="angled-overlay"></div>
		<!-- End of Overlay -->
		<section id="feature1">
			<div class="container ">
				<div class="row feature1-part-one">
					<div class="col-lg-4" data-wow-duration="0s">
						<!-- <i class="ion-ios-briefcase-outline"></i> --> <br/><br/>
						<h2 class="brief-heading-one" style="font-weight:bold;">FLIGHTS</h2><br/>
						<p class="features-brief">Flight booking in US is no more a hassle. We bring to you an easy to use travel booking system which can help you book your flights in the least time and best price.</p>
						<p>
							
						</p>
					</div>
					<div class="col-lg-5" data-wow-duration="0s">
						<!-- <i class="ion-ios-speedometer-outline"></i> --><br/><br/>
						<h2 class="brief-heading-one" style="font-weight:bold;">HOTELS</h2><br/>
						<p class="features-brief">Book hotels according to your needs and desires without any added hidden charges. Find the ideal deal from thousands of options all over US. </p>
						<p>
							
						</p>
					</div>
					<div class="col-lg-3" data-wow-duration="0s">
						<!-- <i class="ion-ios-cloud-outline"></i> --><br/><br/>
						<h2 class="brief-heading-one" style="font-weight:bold;">CAR RENTALS</h2><br/>
						<p class="features-brief">Book cars in no time from a wide range of choices all over US for the best price and quality. We assure you best deals accross all other websites. </p>
						<p>
							
					</br>
					</div>
					
				</div>
                 <a name="aboutus"> </a>
				<div class="row feature1-part-two">
					<div class="col-lg-4 content-1-third">
						<h5>Reize</h5>
						<h2>ABOUT US </h2>
						<br/>
						<p>Reize is a US based travel search site that makes it easy for you to compare the prices on flights and travel deals. With one click you search to find the best flight prices.</p>
						
					</div>
					<div class="col-lg-8 content-2-third-woman wow slideInRight" data-wow-duration="0s">

					</div>
				</div>
				<div class="row feature1-part-two">
					<div class="col-lg-4 col-lg-push-8 content-1-third">
						<h5>It's all about</h5>
						<h2>Travelling Right</h2>
						
						<p>With one click you can see which ticket is the cheapest, quickest or best deal. All you have to do is choose and you are ready to travel the world.</p>
                        <br/>
                        Use Reize to book the flights, car rentals and hotels and find the best deals possible. 
						
					</div>
					<div class="col-lg-8 col-lg-pull-4 content-2-third-love-body wow slideInLeft" data-wow-duration="0s">

					</div>

				</div>
			</div><!-- End of container-->
		</section><!-- End of feature1-->
		<section id="feature2">
			<div class="container">
				<div class="row feature1-part-two">
					<div id="col-lg-4"class="col-lg-4">
						<div class=" content-1-third-jog wow fadeInDown" data-wow-duration="0s">

						</div>
						<div class="content-1-third-track">
							<h5>Let us help you</h5>
							<h2 >Explore</h2>
							<i class="ion-ios-person"></i>
							<p>Finding the right place to travel to can be such a pain sometimes. We can help you plan out your vacation by using the trip finder page.</p>
						</div>
					</div><!-- end of col-lg-4 -->
					<div id="col-lg-8"class="col-lg-8">
						<div class="content-2-third-beach wow fadeInUp" data-wow-duration="0s">

						</div>
						<div class="content-2-third-summer">
							<h2 >How this works?</h2>
							<p>We suggest you some of the best places to travel in US and the major attractions these cities contain. You have a wide rane of oprtions to choose from ranging from beaches, nightlife, adventure, hiking and much more which can be according to your needs and demands.</p>
						</div>
					</div>
				</div><!-- End of col-lg-4 before col-lg-8-->
				
			</div><!-- End of container-->
		</section><!-- End of feature2-->
     
		<footer>
			<div class="launch-ideas">
				<div class="launch-caption">
               
					<h2>I would rather own a little and see the world</h2>
					<p> than own the world and see little of it.</p>
				</div>
			</div>
			<div class="bg-angled-left"></div>
			<div class="bg-angled-right"></div>
			<div class="container footer-details">
				<div class="red-angle"></div>
				<div class="row">
					
					<div class="footer-form col-lg-8 col-lg-offset-4">
                     <a name="contactus"> </a>
						<h3 style="font-size:25px">Contact Us</h3>
						<p> Have a question regarding our website or any feedback, </p>
                        <p>Feel free to drop a message!</p>
					</div>
					
				</div>
				<div class="row">
					<div class="footer-form col-lg-8 col-lg-offset-4">
						<form class="form-inline">
						  <div class="form-group">
						    <input type="text" class="form-control" id="exampleInputName2" placeholder="Your Name">
						  </div>
						  <div class="form-group">
						    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Your Message">
						  </div>
						  <button type="submit" class="btn btn-join">Send Email</i></button>
						</form><!--  end of form -->
					</div>
				</div>
                
			</div>
            
            <?php include('templates/footer.php'); ?>

		</footer>
	
    
<script src="assets/js/wow.js"></script>
		<script src="assets/js/app.js"></script>
</body>
</html>