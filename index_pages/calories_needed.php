<?php
    if($user['gender']=="Male"){
        $bmr=round(5+(10*$user['weight'])+(6.25*$user['height'])-(5*$user['age']),0);
    }
    elseif($user['gender']=="Female"){
        $bmr=round(161+(10*$user['weight'])+(6.25*$user['height'])-(5*$user['age']),0);
    }
    if($user['activity']=="little"){
        $calories_needed=round($bmr*1.2,0);
    }
    elseif($user['activity']=="light"){
        $calories_needed=round($bmr*1.375,0);
    }
    elseif($user['activity']=="moderate"){
        $calories_needed=round($bmr*1.55,0);
    }
    elseif($user['activity']=="very"){
        $calories_needed=round($bmr*1.725,0);
    }
    elseif($user['activity']=="extra"){
        $calories_needed=round($bmr*1.9,0);
    }
?>
<h3>You need:</h3>
<h1 class="text-center" style="font-size:1em; color:#000000;"><?php echo $calories_needed;?><span style="font-size:30pt;">calories/day</span></h1>
<p class="lead">This means that, with your current level of activty and your BMR, you need to take in about <span style="font-weight:bold;color:green;"><?php echo $calories_needed; ?></span> calories per day.</p>

