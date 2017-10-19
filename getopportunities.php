<?php
$q=$_GET["opp"];
$con = mysql_connect('localhost', 'elaram_site', 'espnstar');
if (!$con){
	die('Could not connect: ' . mysql_error());
}
mysql_select_db("elaram_site", $con); 

$sql= "SELECT OrgVolunteerContact,OrgAdditional1,OrgSuitableFor,OrgType,OrgCity,OrgLocation,OrgAddress,OrgZipCode,OrgTitle,OrgName,OrgId,OrgShortDesc FROM Organization WHERE OrgSearchLocation LIKE '%" .$q. "%' ORDER BY OrgDatePosted ASC";
 
$result = mysql_query($sql); 
 
$lengths = mysql_num_rows($result); 

echo "<div class='countmsg'>We have found " . $lengths  ." volunteer opportunities near ". $q .".</div>";
echo "<div class='mainresult' id='mainresult' style='clear: both;margin-left: 5px;margin-right: 5px;'>";
 
while($row = mysql_fetch_array($result)){ 

	echo "<div class='resultitem' style='border-bottom: 1px dotted #666666;margin-bottom: 25px;' id='result" . $row['OrgId'] . "'>";

	echo "<h3 class='resultpagetitleh3'> <a style='color:#89B512' target='_blank' href='/orgdetails.php?orgid=" . $row['OrgId'] . "' class='' title='" . $row['OrgTitle'] . "'>" . $row['OrgTitle'] . "</a>";
	echo "</h3>";

	echo "<div class='searchitem_type'> <b>Org Type</b>: " . $row['OrgType'] . " <b>Locality</b>: (" . $row['OrgLocation'] . "," . $row['OrgZipCode'] . ")</div>";
	
	//echo "<div class='searchitem_divider'></div>";
	
	if(strlen(trim($row['OrgShortDesc'])) > 150){
		echo "<div class='searchitem_desc'>" .substr($row['OrgShortDesc'],0,150) . " ...<a target='_blank' href='/orgdetails.php?orgid=" . $row['OrgId'] . "'>READ MORE</a></div>";
	}
	else{
		echo "<div class='searchitem_desc'>" . $row['OrgShortDesc'] . "</div>";	
	}
		
	echo "<div class='searchitem_type'><b>Address</b>: </div>";
	echo "<div class='searchitem_address'><address id='address' class='adr'><span class='street-address'>" . $row['OrgAddress'] . "</span></div>";
	
	echo "</div>"; 
}
echo "</div>";
mysql_close($con);
?>
