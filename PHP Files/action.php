<?php
$database = 'fitness_test';
$prize = $_POST['price'];
$calories=$_POST['calories'];
$restuarant=$_POST['restuarant'];

$con=mysql_connect("localhost", "root", "rebelt3i");
if(!$con)
{
    die('Could not connect:'. mysql_error());
}
$selectedDb = mysql_select_db($database);
if (!$selectedDb) {
    die("could not to the database\n" . mysql_error());
}
 echo '<tr><td>'.'MEALS'." </td><td>  &nbsp;&nbsp;</td><td>     ".'CALORIES'.'</td></tr>';
$sql="SELECT id FROM meal WHERE prize<$prize AND calories<$calories AND restuarant='$restuarant' ORDER BY calories ASC";
$content=mysql_query($sql,$con);
if (!$content) { // add this check.
     die('Invalid query: ' . mysql_error());
}
while($row=mysql_fetch_array($content)){
    $srn="SELECT size, name,restuarant,calories FROM meal WHERE id=$row[0]";
    $consize=mysql_query($srn,$con);

    while ($row = mysql_fetch_row($consize)) {
        
        if($row[0]==NULL){

     echo '<tr><td>'.$row[1]." </td><td>  &nbsp;&nbsp;</td><td>     ".$row[3]." calories".'</td></tr>';
    }
    else{
      echo '<tr><td>'.$row[0]." size ".$row[1]."   </td><td> &nbsp;&nbsp;</td><td>         ".$row[3]." calories".'</td></tr>';
    }
    }
    
}
mysql_close($con);
?>