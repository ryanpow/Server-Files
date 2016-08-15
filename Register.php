<?php
   	include("connectdb.php");
   	
   	$link=Connection();

	$UserIDAdd=$_POST["UserID"];
	$UsernameAdd=$_POST["Username"];
	$PasswordAdd=$_POST["Password"];
	$LocationAdd=$_POST["Location"];
	$WifiAdd=$_POST["Wifi"];
	
	$query = "insert into GPSAccount values('".$UserIDAdd."','".$UsernameAdd."','".$PasswordAdd."','".$LocationAdd."','".$WifiAdd."')";
   	
   	if ($link->query($query) === TRUE) {
   	    echo "New record created successfully <br>";
   	} else {
   	    echo "Error: " . $sql . "<br>" . $conn->error;
   	}
   	
   	$link->close();
   	header("Location: readDatabase.php");
?>		