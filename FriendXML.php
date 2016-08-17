<?php
header('Content-type: text/xml');
mysql_connect('127.11.44.2:3306', 'adminAXejd2g', 'QGBDCjp_R7s7');
mysql_select_db('mysql');

$sql = "SELECT * from GPSFriend";
$res = mysql_query($sql);

$xml = new XMLWriter();

$xml->openURI('php://output');
$xml->startDocument();
$xml->setIndent(true);
$xml->startElement('GPSFriend');

while ($row = mysql_fetch_assoc($res)) {
$xml->startElement('friend');
  	$xml->startElement("UserID");
  	$xml->writeRaw($row['UserID']);
	$xml->endElement();
	
	$xml->startElement("FriendList");
  	$xml->writeRaw($row['FriendList']);
	$xml->endElement();
	
$xml->endElement();
  
}

$xml->endElement();


$xml->flush();


?>
