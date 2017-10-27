<?php
    //Start session
    session_start();

    include('config/setup.php');

    if(!isset($_SESSION['email'])){
        header('Location: login.php');
    }


    function get_age($dob_day,$dob_month,$dob_year){
        $year   = gmdate('Y');
        $month  = gmdate('m');
        $day    = gmdate('d');
         //seconds in a day = 86400
        $days_in_between = (mktime(0,0,0,$month,$day,$year) - mktime(0,0,0,$dob_month,$dob_day,$dob_year))/86400;
        $age_float = $days_in_between / 365.242199; // Account for leap year
        $age = (int)($age_float); // Remove decimal places without rounding up once number is + .5
        return $age;
     }

    //Declare variables
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $gender=$_POST['gender'];
    $password=$_POST['password'];
    $dd=$_POST['day'];
    $mm=$_POST['month'];
    $yyyy=$_POST['year'];
    $age=get_age($_POST['day'],$_POST['month'],$_POST['year']);
    $height=$_POST['height'];
    $weight=$_POST['weight'];
    $activity=$_POST['activity'];
    $this_id=$user['id'];
    if($firstname&&$lastname&&$gender&&$password&&$age&&$height&&$weight&&$activity){
        $edit_query = "UPDATE users SET firstname='$firstname',lastname='$lastname',gender='$gender',password='$password',age='$age',height='$height',weight='$weight',activity='$activity',dd='$dd',mm='$mm',yyyy='$yyyy' WHERE id='$this_id'";
        $edit_result = mysqli_query($conn,$edit_query);
        header('Location: profile.php');
        //echo $user['id'];
        //echo 'Success';
    } else{
        header('Location: edit_profile.php');
    }
?>