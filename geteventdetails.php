<?php
$q=$_GET["eventid"];
$today = date("Y-m-d");
$con = mysql_connect('localhost', 'elaram_site', 'espnstar');
if (!$con){
	die('Could not connect: ' . mysql_error());
}
mysql_select_db("elaram_site", $con);

$sql= "SELECT EventId, EventName, EventDescription, EventAddress, EventLocation, EventCity, EventState, EventType, EventSuitableFor, EventContact, EventContactPhoneNumber, EventContactEmail, EventDatePosted, EventDate, EventSearchLocation, EventSearchWords, EventAddtnlComments FROM  Events WHERE EventDate > '".$today."' and EventId = '".$q."'";

$result = mysql_query($sql); 

$lengths = mysql_fetch_lengths($result);
 
echo "<div class='display:none'>" . $lengths  ."</div>"; 	

while($row = mysql_fetch_array($result)){
 
	echo "<div style='border-bottom: 1px dotted #666666;margin-bottom: 25px;' class='resultitem' id='events" . $row['EventId'] . "'>";
	
	echo "	<div id='org_title_area' style='border-bottom:none'>";
	
	echo "<h3 style='color:#89B512;font-size:18px' class='resultpagetitleh3'>" . $row['EventName'] . "</h3>";
	
	echo "<div> <b>Event Date:" . $row['EventDate'] . "</b><b>, Event Type</b>: " . $row['EventType'] . "<b>, Location</b>: (" . $row['EventLocation'] . "," . $row['EventCity'] . "," . $row['EventState'] . ")</div>";
	
	echo "</div>";
	
	echo "<div style='padding-left:10px'><p style='padding-bottom: 0px; margin: 0px;'>" . $row['EventDescription'] . "</p></div>";
	
	echo "<div class='org_details'>";
	
	echo "<h2 style='margin-top: 8px;'>Event Details:</h2>";
	
	echo "<ul><li><span class='detail_category'>Where</span><address class='adr' id='address'><span class='street-address'>" . $row['EventAddress'] . "</span><br></address>
</li>";

	echo "<li><span class='detail_category'>Contact</span>" . $row['EventContact'] . ", Ph.No:<b>" . $row['EventContactPhoneNumber'] . "</b>, Email: <b>" . $row['EventContactEmail'] . "</b>
</li>";

	echo "<li><span class='detail_category'>Suitable For</span>" . $row['EventSuitableFor'] . "</li></ul>";

	echo "</div>";
	
	echo "</div>";	
}
mysql_close($con);
?>
