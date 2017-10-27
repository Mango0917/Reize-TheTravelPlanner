<?php 
    //Start session
    session_start();

    include('config/setup.php');

    if(!isset($_SESSION['email'])){
        header('Location: login.php');
    }
    $page['title']=$user['fullname'];
?>
<!DOCTYPE html>
<html>
<head>
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

<body background="assets/images/background1.jpg" style="width: 100%;">

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
			      <a class="navbar-brand" href="#" style="color:#F26351; font-weight:bold"><span class="brand-underline">FIT</span> TIME</a>
			    </div>

			    <!-- Collect the nav links, forms, and other content for toggling-->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="margin-top: 10px;">

			      <ul class="nav navbar-nav navbar-right nav-heads">
                  <!-- <li><a href="dashboard.php" style="color:#FFFFFF; font-weight:bold">DASHBOARD</a></li>-->
			       
			        <li><a href="meal.php" style="color:#FFFFFF; font-weight:bold">RESTAURANTS</a></li>
			        <li><a href="gym.php" style="color:#FFFFFF; font-weight:bold">GYM</a></li>
			        <li><a href="index.php" style="color:#FFFFFF; font-weight:bold">CONTACT US</a></li>
                    
			        <li><a href="logout.php" style="color:#FFFFFF; font-weight:bold">LOGOUT</a></li>
			      </ul>
			    </div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>

	<section id="feature1">
  
<div class="container" style="background-color:#ffffff;">




<div class="container">
<br>
<h1 align="center" style="color:#F26351"><?php include('templates/navigation.php');?> Profile  <a href="dashboard.php" style="color:#F26351; font-weight:bold" align="left"><img src="assets/images/back.png" align="left" style="height:1.0em; width:1.0em;"/></a></h1>

        <hr/>
         
    <br/>
    <div style=" color: #C2CA29; font-size:20px; margin-left:20px; font-weight:bold" >
    <table>
   
     <tr><td style="padding:20px;">First Name: </td><td> &nbsp; &nbsp; &nbsp;</td> <td> <?php echo $user['firstname']; ?> </td></tr> 
   
    
    <tr><td style="padding:20px;">Last Name: </td><td>  &nbsp; &nbsp;&nbsp;</td> <td><?php echo $user['lastname']; ?></td></tr>
   
     <tr><td style="padding:20px;">Username:</td> <td> &nbsp; &nbsp; &nbsp;</td><td> <?php echo $user['email']; ?></td></tr>
   
     <tr><td style="padding:20px;">Gender:</td> <td>  &nbsp; &nbsp;&nbsp;</td><td> <?php echo $user['gender']; ?></td></tr>
     </table>
   
   
    </div>
    </section>
    <section id="feature2">
    
    <div class="container" style="background-color:#ffffff;">
     
        
    <div style=" color: #C2CA29; font-size:20px; margin-left:25px; font-weight:bold" >
    
        <table>
          <tr><td style="padding:20px;">&nbsp;&nbsp;Age: </td> <td><?php echo $user['age']; ?></td></tr>
   
     <tr><td style="padding:20px;">&nbsp;&nbsp;Height: </td> <td><?php echo $user['height'].' cm'; ?></td></tr>
    
    <tr><td style="padding:20px;">&nbsp;&nbsp;Weight: </td> <td><?php echo $user['weight'].' kg'; ?></td></tr>
    
    <tr><td style="padding:20px;">&nbsp;&nbsp;Level of Activity: </td> <td><?php echo $user['activity']; ?></td></tr>
    
    </table>
    <div role="group" align="center">
        <button class="btn btn-default" style="background-color: #A2CA29; color: #FFFFFF;" onclick="var pass = '<?php echo $user['password']; ?>'; var promp = prompt('Enter your password'); if(promp==pass){ location.href='edit_profile.php';} else if(promp!=null && promp!=pass){ alert('The password you entered was incorrect.'); } else if(promp=-false){ }">Edit Profile</button>
      
      &nbsp;&nbsp;
        <button type="button" class="btn btn-default" style="background-color: #F26351; color: #FFFFFF;" onClick="var con = confirm('Are you sure you want to delete your account? This cannot be undone.');
    if(con==true){
        var pass = '<?php echo $user['password']; ?>';
        var prom = prompt('Enter your password:');
        if(prom==pass){
            alert('Your account has been deleted and all your records have been erased!');
            location.href='delete.php';
        } else if(prom!=null && prom!=pass) {
                alert('The password you entered is incorrect!');
                
            } else if(prom==false){
                  
              }
    } else{
            
        }" 
        class="btn btn-danger">Delete Account</button>


</br>   
     	
		  <hr/>
<h2 style="font-size:2em; color=#f26431;">"because today is another chance to get it right"</h2>		    
  
</section>

</div>
</div>

<footer>
<?php include('templates/footer.php'); ?>
</footer>
</body>
</html>