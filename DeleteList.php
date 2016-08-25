<?php
   	include("connectdb.php");
   	
   	$link=Connection();

	$UserID=$_POST["UserID"];
	$FriendList=$_POST["FriendList"];
	
	
	$query = "delete from GPSFriend where UserID='".$UserID."' AND FriendList='".$FriendList."'";
   	
   	if ($link->query($query) === TRUE) {
   	    echo "New record created successfully <br>";
   	} else {
   	    echo "Error: " . $sql . "<br>" . $conn->error;
   	}
   	
   	$link->close();
   	header("Location: readDatabase.php");
?>