<p class="lead">Please enter your resting heart rate (your pulse at rest).</p>
<a data-toggle="modal" data-target="#PulseRate">How to take your pulse</a>
                <div class="modal fade" id="PulseRate" tabindex="-1" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <h5 class="modal-title">How to Take Your Pulse</h5>
                            </div>
                            <div class="modal-body">
                                <img style="height:400px;width:100%" src="http://www.cardiachealth.org/sites/default/files/2011/pulse.gif" />
                                <p>Your pulse can be felt at the wrist, neck, groin or top of the foot - areas where the artery is close to the skin. However usually, people measure their pulse in their wrist. This is called the radial pulse.</p>
                                <h5>Your Pulse</h5>
                                <p>Taking your pulse is easy. It requires no special equipment, however, a watch with a second hand or digital second counter is very helpful.</p>
                                <ol>
                                    <li>Turn the palm side of your hand facing up.</li>
                                    <li>Place your index and middle fingers of your opposite hand on your wrist, approximately 1 inch below the base of your hand.</li>
                                    <li>Press your fingers down in the grove between your middle tendons and your outside bone. You should feel a throbbing - your pulse.</li>
                                    <li>Count the number of beats for 10 seconds, then multiply this number by 6. This will give you your heat rate for a minute.</li>
                                </ol>
                                <h5>Example:</h5>
                                <p>
                                    If you count <strong>11 beats</strong> in the span of <strong>10 seconds</strong>, multiply <strong>11 X 6 = 66</strong>.
                                    This means your heart rate or pulse, is 66 (beats per minute).
                                    Another popular way to measure pulse rate is by measuring it at the neck (carotid pulse). This is especially convenient during exercise. The formula is the same as above, however, when taking the pulse at the neck, place your fingertips gently on one side of your neck, below your jawbone and halfway between your main neck muscles and windpipe:
                                </p>
                                <figure>
                                    <img style="height:400px;width:100%" src="http://www.cardiachealth.org/sites/default/files/2011/pulse2.jpg" />
                                    <figcaption>Taking your pulse upon rising in the morning, or after sitting without activity for about 10 minutes, is know as your Resting Heart Rate.</figcaption>
                                </figure>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
<form class="form-inline" action="index.php?page=8" method="post">
    <div class="form-group">
        <label for="pulse">Pulse</label>
        <input type="number" class="form-control" id="pulse" name="pulse" placeholder="Pulse" />
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <button type="reset" onclick="location.href = 'index.php?page=8';" class="btn">Reset</button>
</form>
<?php 
    if($_POST){
        if($_POST['pulse']){
            $maxHR = 208 - $user['age'];
            $HHR = $maxHR - $_POST['pulse'];
            $lower_bound = $HHR * 0.7;
            $upper_bound = $HHR * 0.85;
            $lower_target = round($lower_bound + $_POST['pulse'],0);
            $upper_target = round($upper_bound + $_POST['pulse'],0);
            ?>
            <h3>Your target heart rate is:</h3>
            <h1 class="text-center" style="font-size:15em;"><?php echo $lower_target.' - '.$upper_target;?><span style="font-size:30pt;">beats/min</span></h1>
    <?php    }
    }
?>