
<?php
header('Content-Type: text/xml');
include("connectdb.php"); 	// change
$output="";
$output+="<GPSAccount>";
$link=Connection();
$result=$link->query("SELECT * FROM GPSAccount"); // change

if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {		
	$output+="<user>
	<UserID>" . $row["UserID"]. "</UserID>
	<Username>" . $row["Username"]. "</Username>
	<Password>" . $row["Password"]. "</Password>
	<Location>" . $row["Location"]. "</Location>
	<Wifi>" . $row["Wifi"]. "</Wifi>
	</user>";
	}
	} else {
	    //echo "0 results";
	}
$link->close();

$output+="<GPSAccount>";

echo $output;

?>

