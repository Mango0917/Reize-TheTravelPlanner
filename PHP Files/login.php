<?php
//Database connection:
    include('config/db_connection.php');
     session_start();
    //Start session:
     $lifetime=1440;
    session_set_cookie_params($lifetime);
   $_SESSION['logged_in']="NOT";
     
    if($_POST){
         $e_mail=$_POST['e_mail'];
        $cus_password=$_POST['cus_password'];
        $query="SELECT * FROM customer WHERE e_mail = '$_POST[e_mail]' AND cus_password = '$_POST[cus_password]'";
        $result=oci_parse($conn, $query);
        if (oci_execute($result))
        {
            
           // echo "<script> alert('executed')</script>";
            //session_register($_SESSION['logged_in']);      
             $_SESSION['e_mail']=$_POST['e_mail'];
             $_SESSION['logged_in']="OK";
            header('Location: dashboard.php');
        }
        else
        {
            echo "<script> alert('not executed')</script>";
        }
       // if(oci_num_rows($result)==1){
         //   $_SESSION['e_mail']=$_POST['e_mail'];
        
           // header('Location: dashboard.php');
            
        //}
        //else{
          //  echo "<script>alert('The email or password you entered are incorrect! Try again.');</script>";
        //}
    }
?>
<?php include('config/setup.php'); ?>
<!DOCTYPE html>
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
					<li><a href="popular.php" style="color:#F26351; font-weight:bold; font-size:1.3em;">POPULAR</a></li>
					<li><a href="userprofile.php" style="color:#F26351; font-weight:bold;font-size:1.3em;">USER PROFILE</a></li>					
			      
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
        <div class="col-md-8 col-md-offset-2">
        <br/>
        <br/> 
        <br/>
              <div class="panel panel-info" style="color:#A2CA28;">
                    <div class="panel-heading" role="tab" id="headingTwo" style="background-color:#A2CA28;">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <h2 class="text-center" style="font-weight:bold;">User Profile</h2>
                            </a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" style="background-color:#000070;  background-color: rgba(0, 0, 0, .7);"aria-labelledby="headingOne">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-4 col-md-offset-4">
                                    <form action="login.php" method="post">
                                        <div class="form-group">
                                            <!-- START Username-->
                                            <label for="e_mail" style="font-color:#FFFFFFF; font-weight:bold;"><h3 style=" font-color:#FFFFFFF;">Username</h3></label>
                                            <input type="text" class="form-control" id="e_mail" name="e_mail" placeholder="Username" />
                                        </div><!-- END Username -->
                                        <div class="form-group">
                                            <!-- START Password -->
                                            <label for="cus_password"><h3 style=" font-color:#FFFFFFF;font-weight:bold;">Password</h3></label>
                                            <input type="password" class="form-control" id="cus_password" name="cus_password" placeholder="Password" />
                                        </div><!-- END Password -->
                                        <!-- <div class="checkbox">
                                           <label>
                                            <input type="checkbox"> Keep me logged in
                                          </label>
                                        </div> -->
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        &nbsp;
                                        <button type="submit" class="btn " style="background-color: #F26351; color: #FFFFFF;">Log In</button>
                                        
                                    </form><!-- END Login Form -->
                                </div><!-- END column -->
                            </div><!-- END row -->
                        </div><!-- END panel-body -->
                    </div><!-- END panel-collapse -->
                </div><!-- END panel -->
                <br/>
                <br/>
                <br/>
                <br/>
<br/>
    
                <div class="panel panel-info" style="color:#A2CA28;">
                    <div class="panel-heading" role="tab" id="headingTwo" style="background-color:#A2CA28;">
                        <h4 class="panel-title">
                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <h2 class="text-center" style="font-weight:bold;">SIGN UP</h2>
                            </a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"style="background-color:#000070;  background-color: rgba(0, 0, 0, .7);" aria-labelledby="headingTwo">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-4 col-md-offset-4">
                                    <form action="signup.php" method="post">
                                        <div class="form-group">
                                            <!-- START First Name -->
                                            <label for="f_name"><h3 style=" font-color:#FFFFFFF;font-weight:bold;">First Name</h3></label>
                                            <input type="text" class="form-control" id="f_name" name="f_name" placeholder="First Name" required />
                                        </div><!-- END First Name -->
                                        <div class="form-group">
                                            <!-- START Last Name -->
                                            <label for="l_name"><h3 style=" font-color:#FFFFFFF;font-weight:bold;">Last Name</h3></label>
                                            <input type="text" class="form-control" id="l_name" name="l_name" placeholder="Last Name" required />
                                        </div><!-- END Last Name-->
                                        <div class="form-group">
                                          
                                        <div class="form-group">
                                            <!-- START Username -->
                                            <label for="e_mail"><h3 style=" font-color:#FFFFFFF;font-weight:bold;">Username</h3></label>
                                            <input type="text" class="form-control" id="e_mail" name="e_mail" placeholder="Username" required />
                                        </div><!-- END Username -->
                                        <div class="form-group">
                                            <label for="cus_password"><h3 style=" font-color:#FFFFFFF;font-weight:bold;">Password</h3></label>
                                            <input type="password" class="form-control" id="cus_password" name="cus_password" placeholder="Password" required />
                                        </div>
                                         
                                         <div class="form-group">
                                            <label for="cus_phone"><h3 style=" font-color:#FFFFFFF;font-weight:bold;">Phone Number</h3></label>
                                            <input type="text" class="form-control" id="cus_phone" name="cus_phone" placeholder="Number" required />
                                        </div>
                                        <br />
                                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        &nbsp;<button type="submit" class="btn " style="background-color: #F26351; color: #FFFFFF;">Submit</button>
                                    </form><!-- END Create Account Form-->
                                </div><!-- END column -->
                            </div><!-- END row -->
                        </div><!-- END Panel-body -->
                    </div><!-- END Panel-collapse -->
                </div><!-- END Panel -->
            </div><!-- END panel-group -->
        </div><!-- End ROW -->
        </div>
        </div>
        <br/>
        <br/>
               
               <br/>
               <br/> 
   
 
    
       
    
  
</body>
</html>