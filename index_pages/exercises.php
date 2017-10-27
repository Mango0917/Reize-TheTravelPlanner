<br />
<ul class="nav nav-pills" ng-init="tab=1">
  <li role="presentation" ng-click="tab=1" ng-class="{active: tab===1}"><a href="#">Abdominal</a></li>
  <li role="presentation" ng-click="tab=2" ng-class="{active: tab===2}"><a href="#">Biceps</a></li>
  <li role="presentation" ng-click="tab=3" ng-class="{active: tab===3}"><a href="#">Triceps</a></li>
  <li role="presentation" ng-click="tab=4" ng-class="{active: tab===4}"><a href="#">Forearms</a></li>
  <li role="presentation" ng-click="tab=5" ng-class="{active: tab===5}"><a href="#">Chest</a></li>
  <li role="presentation" ng-click="tab=6" ng-class="{active: tab===6}"><a href="#">Shoulders</a></li>
  <li role="presentation" ng-click="tab=7" ng-class="{active: tab===7}"><a href="#">Traps</a></li>
  <li role="presentation" ng-click="tab=8" ng-class="{active: tab===8}"><a href="#">Glutes</a></li>
  <li role="presentation" ng-click="tab=9" ng-class="{active: tab===9}"><a href="#">Quadriceps</a></li>
  <li role="presentation" ng-click="tab=10" ng-class="{active: tab===10}"><a href="#">Hamstrings</a></li>
  <li role="presentation" ng-click="tab=11" ng-class="{active: tab===11}"><a href="#">Calves</a></li>
  <li role="presentation" ng-click="tab=12" ng-class="{active: tab===12}"><a href="#">Cardio</a></li>
</ul>
<br/>
<p class="lead">NOTE: All videos belong to www.bodybuilding.com</p>
<br />
<div ng-show="tab===1"><?php include('exercise_pages/abdominals.php'); ?></div>
<div ng-show="tab===2"><?php include('exercise_pages/biceps.php'); ?></div>
<div ng-show="tab===3"><?php include('exercise_pages/triceps.php'); ?></div>
<div ng-show="tab===4"><?php include('exercise_pages/forearms.php'); ?></div>
<div ng-show="tab===5"><?php include('exercise_pages/chest.php'); ?></div>
<div ng-show="tab===6"><?php include('exercise_pages/shoulders.php'); ?></div>
<div ng-show="tab===7"><?php include('exercise_pages/traps.php'); ?></div>
<div ng-show="tab===8"><?php include('exercise_pages/glutes.php'); ?></div>
<div ng-show="tab===9"><?php include('exercise_pages/quadriceps.php'); ?></div>
<div ng-show="tab===10"><?php include('exercise_pages/hamstrings.php'); ?></div>
<div ng-show="tab===11"><?php include('exercise_pages/calves.php'); ?></div>
<div ng-show="tab===12"><?php include('exercise_pages/cardio.php'); ?></div>