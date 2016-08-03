<?php
   	include("connectdb.php");
   	
   	$link=Connection();

	$UserID=$_POST["UserID"];
	$Username=$_POST["Username"];
	$Password=$_POST["Password"];
	$Location=$_POST["Location"];
	$Wifi=$_POST["Wifi"];
	
	$query = "insert into GPSAccount values('".UserID."','".Username."','".Password."','".Location."','".Wifi."')";
   	
   	if ($link->query($query) === TRUE) {
   	    echo "New record created successfully <br>";
   	} else {
   	    echo "Error: " . $sql . "<br>" . $conn->error;
   	}
   	
   	$link->close();
   	header("Location: readDatabase.php");
?>		