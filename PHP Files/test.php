<?php
//Start session
session_start();

if(!isset($_SESSION['email'])){
    header('Location: login.php');
}
?>
<?php include('config/setup.php');
      $pageid=2;?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php include('config/css.php'); ?><!-- CSS Files-->
    <?php include('config/js.php'); ?><!-- JavaScript Files-->
    <title>
        <?php echo $page['title'].' | '.$site_name; ?>
    </title>
</head>
<body>
    <div class="container">
        <div id="logo">
            <h1 class="text-center">
                <em>
                    <span id="my">My</span>
                    FitnessPal
                </em>
            </h1>
        </div>
    </div>
    <?php include('templates/navigation.php');?>
    <br />
    <h1 class="text-center">
        <?php echo $page['title']; ?>
    </h1>
    <div class="container">
        <?php echo $user['age'] *3; ?>
    </div>
</body>
</html>
