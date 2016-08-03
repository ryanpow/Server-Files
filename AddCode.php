<?php
   	include("connectdb.php");
   	
   	$link=Connection();

	$UserID=$_POST["UserID"];
	$FriendList=$_POST["FriendList"];
	
	
	$query = "insert into GPSFriend values('".UserID."','".FriendList."')";
   	
   	if ($link->query($query) === TRUE) {
   	    echo "New record created successfully <br>";
   	} else {
   	    echo "Error: " . $sql . "<br>" . $conn->error;
   	}
   	
   	$link->close();
   	header("Location: readDatabase.php");
?>