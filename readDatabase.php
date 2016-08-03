<?php

	include("connectdb.php"); 	
	
	$link=Connection();

	$result=$link->query("Select * from GPSAccount");
?>

<html>
   <head>
      <title>Data</title>
   </head>
<body>
   <h1>Watch</h1>

   <table border="1" cellspacing="1" cellpadding="1">
		<tr>
			<td>&nbsp;UserID&nbsp;</td>
			<td>&nbsp;Username&nbsp;</td>
			<td>&nbsp;Location&nbsp;</td>
			<td>&nbsp;Wifi&nbsp;</td>
			
		</tr>

      <?php 
	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	        echo "<tr><td>" . $row["UserID"]. "</td><td>" . $row["Username"]. "</td><td>" . $row["Location"]."</td><td>" . $row["Wifi"]. "</td></tr>";
	    }
	} else {
	    echo "0 results";
	}
	$link->close();
      ?>

   </table>
</body>
</html>	