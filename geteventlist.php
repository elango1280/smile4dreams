<?php
$q=$_GET["eventid"];
$today = date("Y-m-d");
$con = mysql_connect('localhost', 'elaram_site', 'espnstar');
if (!$con){
	die('Could not connect: ' . mysql_error());
}
mysql_select_db("elaram_site", $con);

$sql= "SELECT EventId, EventName, EventDescription, EventAddress, EventLocation, EventCity, EventState, EventType, EventSuitableFor, EventContact, EventContactPhoneNumber, EventContactEmail, EventDatePosted, EventDate, EventSearchLocation, EventSearchWords, EventAddtnlComments FROM  Events WHERE EventDate > '".$today."'";

$result = mysql_query($sql); 

$lengths = mysql_fetch_lengths($result);
 
echo "<div class='display:none'>" . $lengths  ."</div>"; 	

echo "<table class='dataTable' width='95%' cellspacing='0' cellpadding='0'>";
	
echo "<tbody>";
	
echo "<tr><th colspan='2' class='wsh_upcoming'>Upcoming Events</th></tr>";

while($row = mysql_fetch_array($result)){
	
	echo "<tr class='primary'><td class='wsh_date'><nobr>" . $row['EventDate'] . "</nobr><br></td>";
	
	echo "<td class='wsh_event'><span><strong>" . $row['EventName'] . "</strong></span>";
	
	echo "<br><a target='_blank' href='eventdetails.php?eventid=" . $row['EventId'] . "'>More Details</a>";
	
	echo "</td></tr>";	
}

echo "</tbody>";	
	
echo "</table>";

mysql_close($con);
?>
