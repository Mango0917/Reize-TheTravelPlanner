<?php
    if($user['gender']=="Male"){
        $bmr=round(5+(10*$user['weight'])+(6.25*$user['height'])-(5*$user['age']),0);
    }
    elseif($user['gender']=="Female"){
        $bmr=round(-161+(10*$user['weight'])+(6.25*$user['height'])-(5*$user['age']),0);
   }
?>
<h3>Your BMR is:</h3>
<h1 class="text-center" style="font-size:19em;"><?php echo $bmr;?><span style="font-size:30pt;">calories/day</span></h1>
<p class="lead">This means that your body will burn <strong><span style="color:green"><?php echo $bmr; ?></span></strong> calories each day if you are asleep or inactive all day.</p>