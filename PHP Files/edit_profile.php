<?php 
    //Start session
    session_start();

    include('config/setup.php');

    if(!isset($_SESSION['email'])){
        header('Location: login.php');
    }
    $page['title']='Edit Account: '.$user['fullname'];
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="icon" type="image" href="images/icon.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php include('config/css.php'); ?><!-- CSS Files-->
    <?php include('config/js.php'); ?><!-- JavaScript Files-->
    <title><?php echo $page['title'].' | '.$site_name; ?></title>
</head>
<body background="assets/images/background1.jpg">
<script src="assets/js/jquery-3.1.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="assets/css/ionicons.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/animate.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="assets/js/bootstrap.min.js"></script>

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,700' rel='stylesheet' type='text/css'>


	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
    
 
  



 <header>
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
						<a href="index.php">	<i class="ion-logo"> <img src="assets/images/logo.png" style="margin-left: 20px;"/> </i> </a><br/>
			      <a class="navbar-brand" href="#" style="color:#FFFFFF; font-weight:bold"><span class="brand-underline">FIT</span> TIME</a>
			    </div>

			    <!-- Collect the nav links, forms, and other content for toggling-->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="margin-top: 10px;">

			      <ul class="nav navbar-nav navbar-right nav-heads">
			        <li><a href="index.php" style="color:#FFFFFF; font-weight:bold">ABOUT US</a></li>
			        <li><a href="meal.php" style="color:#FFFFFF; font-weight:bold">RESTAURANT</a></li>
			        <li><a href="gym.php" style="color:#FFFFFF; font-weight:bold">GYM</a></li>
			        <li><a href="index.php" style="color:#FFFFFF; font-weight:bold">CONTACT US</a></li>
			        
			      </ul>
			    </div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>
</header>

		
				<section id="feature1">
  
<div class="container" style="background-color:#ffffff;">
</BR>
<h1 align="center" style="color:#F26351"> EDIT PROFILE </h1>
        <hr/>
<h3 class="text-center" style=" color: #F26351;><?php echo "Edit Account"; ?></h1>
<div class="container">
 <div class="col-md-4 col-md-offset-4">
    
    <form action="editProfile.php" method="post">
        <div class="form-group">
            <!-- START First Name -->
            <label for="firstname">First Name</label>
            <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name" autocomplete="false" value="<?php echo $user['firstname']; ?>" />
        </div><!-- END First Name -->
        <div class="form-group">
            <!-- START Last Name -->
            <label for="lastname">Last Name</label>
            <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name" value="<?php echo $user['lastname']; ?>" />
        </div><!-- END Last Name-->
        <div class="form-group">
            <!-- START Gender-->
            <label for="gender">Gender</label>
            <select name="gender" class="form-control">
                <option value="Male" <?php if($user['gender']=='Male'){ echo 'selected'; } ?>>Male</option>
                <option value="Female" <?php if($user['gender']=='Female'){ echo 'selected'; } ?>>Female</option>
            </select>
            </div><!-- END Gender -->
        
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password" value="<?php echo $user['password']; ?>" />
        </div>
       <div class="form-group">
            <!-- START Age -->
            <label for="age">Age</label>
                                            <div>
                                            
                                            <input type="date" class="form-control" id="day" name="day" required />
                                            
                                            
                                            </div>
        </div><!-- END Age -->
        </div>
    </section>
    <section id="feature2">
       
    <div class="container" style="background-color:#ffffff;">
    <h3 class="text-center" style=" color: #F26351;><?php echo "Edit Account"; ?></h1>
     <div class="container">
 <div class="col-md-4 col-md-offset-4">
    
    <form action="editProfile.php" method="post">
            <!-- START Height -->
            <label for="height">Height (cm)</label>
            <input type="number" step="any" class="form-control" id="height" name="height" placeholder="Height" value="<?php echo $user['height']; ?>" />
           
        <div class="form-group">
            <!-- START Weight -->
            <div class="form-group">
            <label for="weight">Weight (kg)</label>
            <input type="number" class="form-control" id="weight" name="weight" placeholder="Weight" value="<?php echo $user['weight']; ?>" />
        </div><!-- END Weight -->
        <div class="form_group">
            <!-- START Level of Activity -->
            <label for="activity">Level of Activity</label>
            <select class="form-control" name="activity">
                <option value="little" <?php if($user['activity']=='little'){ echo 'selected'; } ?>>Sedentary - little/no exercise</option>
                <option value="light" <?php if($user['activity']=='light'){ echo 'selected'; } ?>>Lightly active - exercise 1-2 days/week</option>
                <option value="moderate" <?php if($user['activity']=='moderate'){ echo 'selected'; } ?>>Moderately active - exercise 3-5 days/week</option>
                <option value="very" <?php if($user['activity']=='very'){ echo 'selected'; } ?>>Very active - exercise 6-7 days/week</option>
                <option value="extra" <?php if($user['activity']=='extra'){ echo 'selected'; } ?>>Extra active - very hard exercise daily and physical job</option>
            </select>
        </div><!-- END Level of Activity -->
        <br />
        <div style="margin-bottom:15px;margin-left:3px;" class="row">
            <button type="submit" class="btn btn-primary" style="background-color: #F26351; color: #FFFFFF; width:15.5em;">Confirm Changes</button>
            <a role="button" class="btn btn-default" href="profile.php">Cancel</a>
        </div>
    </form><!-- END Edit Account Form-->
</div>
</div>

<footer>
<?php include('templates/footer.php'); ?>
</footer>
</body>
</html>