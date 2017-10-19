<?php
$q=$_GET["orgid"];
$con = mysql_connect('localhost', 'elaram_site', 'espnstar');
if (!$con){
	die('Could not connect: ' . mysql_error());
}
mysql_select_db("elaram_site", $con);

$sql= "SELECT OrgTitle, OrgWebSite, OrgName, OrgPhotoLocation, OrgShortDesc, OrgFullDesc, OrgContact, OrgPhoneNumber, OrgEmail, OrgAddress, OrgLocation, OrgCity, OrgZipCode, OrgRequirements, OrgSkills, OrgSuitableFor, OrgType, OrgId, OrgCoordinates, OrgVolunteerContact, OrgGoogleMapLoc, OrgDatePosted, OrgSearchLocation, OrgSearchWords, OrgAdditional1 FROM  Organization";

$result = mysql_query($sql);

$lengths = mysql_fetch_lengths($result);

echo "<h2 style='padding:15px'>Smile for Dreams - Orphanage List</h2>"; 

echo "<table width='100%' style='padding-left:15px'>";
echo "	<tbody>";
echo "		<tr>";
echo "			<td width='50%'><a style='color: #660000;font-size: 1.5em;' href='#'>Name</a></td>";
echo "			<td width='50%'><a style='color: #660000;font-size: 1.5em;' href='#'>Place/Location</a></td>";
echo "		</tr>";
echo "	</tbody>";

while($row = mysql_fetch_array($result)){

echo "		<tr>";
echo "			<td width='50%'><a style='color:#A9A9A9' target='_blank' href='/orgdetails.php?orgid=" . $row['OrgId'] . "' class='' title='" . $row['OrgTitle'] . "'>" . $row['OrgTitle'] . "</a></td>";
echo "			<td width='50%' style='color:#A9A9A9'>" . $row['OrgLocation'] . "</td>";
echo "		</tr>";


}

echo "		<tr>";
echo "			<td width='50%'><a href='#'></a></td>";
echo "			<td width='50%'><a href='#'></a></td>";
echo "		</tr>";
echo "</table>";

echo "<br/><br/>";

	echo "<div ='disclaimer' style='padding-bottom:10px'>";
	echo "<b style='color: #3497B4 !important;'>Note: </b>If the above information is incorrect, please help us in updating it. Use our <a href='http://smile4dreams.org/feedback.php'>Feedback Form</a> to contact us. <br><br> "; 
	echo "<b style='color: #3497B4 !important;'>Disclaimer: </b>If your are the owner of the above organisation and if you have any concerns with the content, use our <a href='http://smile4dreams.org/feedback.php'>Feedback Form</a> to contact us."; 
	echo "</div>";

mysql_close($con);
?>
