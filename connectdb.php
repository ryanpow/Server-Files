<?php
function Connection(){
	$servername = "127.11.44.2:3306";
	$username = "adminAXejd2g";
	$password = "QGBDCjp_R7s7";
	$dbname = "mySQL";
	$index = 0;
   	
	$conn = new mysqli($servername, $username, $password, $dbname);
	   // Check connection
	   if ($conn->connect_error) {
	       die("Connection failed: " . $conn->connect_error);
	   }    
	   
	return $conn;
}
?>

		