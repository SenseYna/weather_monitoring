<?php include 'database.php';?>

<?php

// create a variable
$temp = $_POST[ "temp" ];
$uv = $_POST[ "uv"];
$lat = $_POST[ 'lat' ];
$long = $_POST[ 'long' ];
$tz = $_POST[ 'tz' ];
//Execute the query
mysqli_query( $connect, "INSERT INTO roott(uv, Nhiet DO, X, Y)
 VALUES('$uv','$temp','$lat','$long')" );

if ( mysqli_affected_rows( $connect ) > 0 ) {
	echo "<p>Success</p>";

	/*$result = mysqli_query( $connect, "SELECT AVG(Temp) AS Nhiet FROM temp" );
	$row = mysqli_fetch_assoc( $result );
	echo $row[ 'Nhiet' ];*/

	echo "<a href=\"index.php\">Go Back</a>";
} else {
	echo "Failed<br />";
	echo mysqli_error( $connect );
}
?>