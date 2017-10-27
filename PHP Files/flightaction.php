<?php   
 include('config/db_connection.php'); 
 //Start session:
    session_start();
 ?>
<?php 
include('config/setup.php'); ?>
<html>
<body>
<form action="" method="post">
To:<br>
<input type="text" name="C_NAME"><br>
From:<br>
<input type="text" name="D_NAME"><br>

<input type="submit" name="postsubmit" value="Submit">
</form>
</body>
</html>
<?php
// echo '<tr><td>'.'MEALS'." </td><td>  &nbsp;&nbsp;</td><td>     ".'CALORIES'.'</td></tr>';
//$sql="SELECT FL_ID FROM FLIGHTS WHERE SRC_C_ID=(select C_ID from CITY where C_NAME=$C_NAME) AND DEST_C_ID=(SELECT C_ID FROM CITY WHERE D_NAME=$D_NAME) AND DEP_DATE= $DEP_DATE AND $NO_OF_PASSENGERS<= SEATS;
if (isset($_POST['postsubmit'])) {
$C_NAME=$_POST['C_NAME'];
$D_NAME=$_POST['D_NAME'];
$stmt="SELECT * FROM FLIGHTS WHERE SRC_C_ID=(SELECT C_ID FROM CITY WHERE C_NAME='$C_NAME') ";
$stid=oci_parse($conn,$stmt);
if( !oci_execute($stid) ) {
    $e = oci_error();
    echo htmlentities($e['message'], ENT_QUOTES);
	oci_close($conn);
} 
else {
	// retrieve the results
	print "<p>The flights:</p>\n";
	print "<table cols=5 border=1>\n";
	print "<tr>\n";
	print "<th>Flight Name</th>\n";
	print "<th>Flight Number</th>\n";
	print "<th>Price</th>\n";
	print "<th>Seats</th>\n";
	print "<th>Date of Departure</th>\n";
    print "<th>Date of Arrival</th>\n";
	print "</tr>";
	while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)) {
    	echo "<tr>\n";
    	foreach ($row as $item) {
        	echo "    <td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "&nbsp;") . "</td>\n";
    	}
    	echo "</tr>\n";
	}
}
oci_close($conn);
}
?>