<p class="lead">Please enter your activity and the duration.</p>
<form class="form-inline" action="dashboard.php" method="post">
    <div class="form-group">
        <label for="activity">Activity</label>
        <select class="form-control" name="activity">
            <?php include('calories_burned_options.php'); ?>
        </select>
    </div>
    <div class="form-group">
        <label for="duration">Duration</label>
        <div class="input-group">
            <input type="number" class="form-control" name="duration" id="duration" step="0.001" placeholder="Duration" autocomplete="no" />
            <div class="input-group-addon">hours</div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary" style="background-color: #F26351; color: #FFFFFF; width:15.5em;">Submit</button>
    <button type="reset" style="color: #00000; width:15.5em;"onclick="location.href = 'dashboard.php';" class="btn">Reset</button>
</form>
<?php
    if($_POST){
        if($_POST['activity']&& $_POST['duration']){
            $calories_burned=round($_POST['activity']*$_POST['duration']*$user['weight'],0);
?>
               <!-- MAIN PAGE AREA-->
               <h3>You burned:</h3>
<h1 class="text-center" style="font-size:5em;"><?php echo $calories_burned;?><span style="font-size:10pt;">calories</span></h1>
        <?php }
    }
?>