<?php
    $bmi=round($user['weight']/($user['height']/100)**2,1);
?>

<h3>Your BMI is:</h3>

    <i tabindex="0" data-toggle="popover" data-trigger="focus" title="Note" data-content="Your BMi may not be truly reflective of your body fat. For example, muscle-builders will have higher BMIs because of their muscle, which weighs more than fat. So it is important to know that your BMI does not fully conclude whether you are overweight or not, although it is a great indicator and is often roughly accurate." class="fa fa-exclamation-circle col-md-offset-9 fa-2x" style="position:relative;top:70px;"></i>

    <h1 class="text-center" style="<?php if($bmi<18.5){
                                                  echo "color:#38ACEC";
                                              }
                                              elseif($bmi>=18.5 && $bmi<25){
                                                  echo "color:green";
                                              }
                                              elseif($bmi>24.9 && $bmi<30){
                                                  echo "color:orange";
                                              }
                                              elseif($bmi>29.9 && $bmi <40){
                                                  echo "color:red";
                                              }
                                              elseif($bmi>=40){
                                                  echo "color:#800517";
                                              }
                               ?>
                                            ;font-size:20em;"><?php echo $bmi; ?></h1>
    <h3 class="text-center text-uppercase" style="<?php if($bmi<18.5){
                                                        echo "color:#38ACEC";
                                              }
                                              elseif($bmi>=18.5 && $bmi<=24.9){
                                                  echo "color:green";
                                              }
                                              elseif($bmi>24.9 && $bmi<30){
                                                  echo "color:orange";
                                              }
                                              elseif($bmi>29.9 && $bmi<40){
                                                  echo "color:red";
                                              }
                                              elseif($bmi>=40){
                                                  echo "color:#800517";
                                              }
                                            ?>
                                            ;margin-top:-50px;">
        

                                            <?php
                                             if($bmi<18.5){
                                                  echo "you are underweight";
                                              }
                                              elseif($bmi>=18.5 && $bmi<=24.9){
                                                  echo "you are healthy weighted";
                                              }
                                              elseif($bmi>24.9 && $bmi<30){
                                                  echo "you are overweight";
                                              }
                                              elseif($bmi>29.9 && $bmi<40){
                                                  echo "you are obese";
                                              }
                                              elseif($bmi>=40){
                                                  echo "you are extremely obese";
                                              }
                                             ?></h3>
        
<?php
    if($bmi>24.9){
        echo "<h3>Here are some tips to reduce your body weight:</h3>";
    ?>
    <ul style="font-size:15pt;">
        <li>Consume fewer calories than you normally consume. Consuming fewer calories will result in less weight gained. Ensure that you check the calorie content of the food items before you eat them. You can see a list of foods and their calorie content <a href="?page=4">here</a>.</li>
        <li>Avoid quick fixes and fad diets. Fad diets and other quick fixes often promise astonishing weight loss in a short period of time. Keep in mind fad diets can sometimes help in the short term but do not work any better in the long term than conventional dieting and lifestyle changes. Some of them, in fact, may work worse long term as the rules are difficult to maintain for extended periods. Focus instead on overall lifestyle change. Keep in mind a healthy rate of weight loss is one to three kilograms per week. Any diet promises more than that may be unhealthy or unrealistic.</li>
        <li>Start exercising or increase your level of exercise. Exercise helps you burn calories, consequently reducing your weitght. You can find different exercises and workouts and even tips on how to start exercising <a href="?page=6">here</a>.</li>
        <li>Move more throughout the day. You will be surprised that simply moving yourself burns calories. See the amount of calories you brun by doing different activities <a href="?page=5">here</a>.</li>
        <li><strong>DO NOT STARVE YOURSELF!</strong> Continue to eat three square meals per day so you will have enough energy to carry out metabolic processes. Depriving your body of food will only harm you. Rather, eat healthier foods and make your diet healthier.</li>
        <li>Seek counseling if necesseary. Seek some professional help or a counselor to help deal with any emotional or behavrioral distress of being overweight. Don't let it demoralise you to the point that you become depressed or insecure. That will only harm you more, and may even lead you to make some rash decisions.</li>
    </ul>
<?php
 }
    elseif($bmi<18.5){
        echo "<h3>Here are some tips to increase your body weight:</h3>";
    ?>
    <ul style="font-size:15pt;">
        <li>Eat more! Eat healthier! Consume more calories by eating foods with higher calorie content than those in your current diet. Doing this would help you gain weight as your calorie consumption will increase. But in order to actually gain weight, you will need to consume more calories than the amount you need to carry out metabolic processes in your body. To see how many calories you need daily and the calorie content of some foods, click <a href="?page=4">here</a>.</li>
        <li>Exercise more. Engange in anareobic exercises, such as weightlifting so you will gain lean muscle instead of just body fat. You could exercise different muscle groups on different days, so in overall, the muscles all over your body should strenghen, and your body weight will inrease.</li>
    </ul> 
<?php
 }
    elseif($bmi>=18.5 && $bmi<25){
        echo "<h3>Here are some tips to maintain your body weight:</h3>";
    ?>
    <ul style="font-size:15pt;">
        <li>Continue consuming, on an average, the level of calories your body needs daily. To see that figure, click <a href="?page=4">here</a>. Also, keep burning, again on an average, the amount of calories you normally burn so you burn the calories that you ususally consume, meaning your body weight should remain almost constant. Burninng calories can be achiveved by exercising, playing sports, and basically exerting your body in any physical activity. To see the amount of calories each activity that you do burns, click <a href="?page=5">here</a>.</li>
    </ul>
<?php } ?>