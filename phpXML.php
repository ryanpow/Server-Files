
<?php
header('Content-Type: text/xml');
include("connectdb.php"); 	// change
$link=Connection();
$result=$link->query("SELECT * FROM GPSAccount"); // change
echo "<GPSAccount>";
if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {		
	echo "<user>\n
	<UserID>" . $row["UserID"]. "</UserID>
	<Username>" . $row["Username"]. "</Username>
	<Password>" . $row["Password"]. "</Password>
	<Location>" . $row["Location"]. "</Location>
	<Wifi>" . $row["Wifi"]. "</Wifi>
	</user>";
	}
	} else {
	    echo "0 results";
	}
$link->close();

echo "<GPSAccount>";


?>

