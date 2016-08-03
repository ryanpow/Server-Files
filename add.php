<?php
   	include("connectdb.php");
   	
   	$link=Connection();

	$UserID=$_POST["UserID"];
	$Location=$_POST["Location"];
	$Wifi=$_POST["Wifi"];

	if($Location==null){	
	$query = "UPDATE GPSAccount set Wifi='".$Wifi."' where UserID='".$UserID."'";
   	}
	else if($Wifi==null){
	$query = "UPDATE GPSAccount set Location='".$Location."' where UserID='".$UserID."'";
	} 
	
	else{
	 $query = "UPDATE GPSAccount set Wifi='".$Wifi."',Location='".$Location."' where UserID='".$UserID."'";
	 }
   	if ($link->query($query) === TRUE) {
   	    echo "New record created successfully <br>";
   	} else {
   	    echo "Error: " . $sql . "<br>" . $conn->error;
   	}
   	
   	$link->close();
   	header("Location: readDatabase.php");
?>

		