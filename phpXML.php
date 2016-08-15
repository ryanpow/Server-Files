
<?php

mysql_connect('127.11.44.2:3306', 'adminAXejd2g', 'QGBDCjp_R7s7');
mysql_select_db('mysql');

$sql = "SELECT * from GPSAccount";
$res = mysql_query($sql);

$xml = new XMLWriter();

$xml->openURI('php://output');
$xml->startDocument();
$xml->setIndent(true);
$xml->startElement('GPSAccount');
$xml->startElement('Users');

while ($row = mysql_fetch_assoc($res)) {
  	$xml->startElement("UserID");
  	$xml->writeRaw($row['UserID']);
	$xml->endElement();
	
	$xml->startElement("Username");
  	$xml->writeRaw($row['Username']);
	$xml->endElement();
	
	$xml->startElement("Password");
	$xml->writeRaw($row['Password']);
	$xml->endElement();
	
	$xml->startElement("Location");
  	$xml->writeRaw($row['Location']);
	$xml->endElement();
	
	$xml->startElement("Wifi");
  	$xml->writeRaw($row['Wifi']);
	$xml->endElement();

  
}

$xml->endElement();
$xml->endElement();

header('Content-type: text/xml');
$xml->flush();


?>
