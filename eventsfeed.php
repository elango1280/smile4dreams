<?php
header("Content-Type: application/rss+xml; charset=UTF-8");

$rssfeed = '<?xml version="1.0" encoding="UTF-8"?>';
$rssfeed .= '<rss version="2.0">';
$rssfeed .= '<channel>';
$rssfeed .= '<title>Smile4Dreams - Events</title>';
$rssfeed .= '<link>http://smile4dreams.org/</link>';
$rssfeed .= '<description>RSS Feed for Events</description>';
$rssfeed .= '<language>en-us</language>';
$rssfeed .= '<copyright>Copyright (C) 2013 smile4dreams.org</copyright>';

$today = date("Y-m-d");
$con = mysql_connect('localhost', 'elaram_site', 'espnstar');
if (!$con){
	die('Could not connect: ' . mysql_error()); 
}
mysql_select_db("elaram_site", $con);

$sql= "SELECT EventId, EventName, EventDescription, EventAddress, EventLocation, EventCity, EventState, EventType, EventSuitableFor, EventContact, EventContactPhoneNumber, EventContactEmail, EventDatePosted, EventDate, EventSearchLocation, EventSearchWords, EventAddtnlComments FROM  Events WHERE EventDate > '".$today."'";

$result = mysql_query($sql); 

$lengths = mysql_fetch_lengths($result);

while($row = mysql_fetch_array($result)){	
	$rssfeed .= '<item>';	
        $rssfeed .= '<title>' . $row['EventName'] . ' (Event Date: ' . $row['EventDate'] . ')</title>';
        $rssfeed .= '<description>' . $row['EventDescription'] . '</description>';
        $rssfeed .= '<link>http://smile4dreams.org/eventdetails.php?eventid=' . $row['EventId'] . '</link>';
        $rssfeed .= '<pubDate>' . $row['EventDatePosted'] . '</pubDate>';
        $rssfeed .= '</item>';	
}
	$rssfeed .= '</channel>';
	$rssfeed .= '</rss>';
 
echo $rssfeed;

mysql_close($con);
?>
