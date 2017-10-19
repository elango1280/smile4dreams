<?php
$q=$_GET["place"];
$s=$_GET["services"];
$con = mysql_connect('localhost', 'elaram_site', 'espnstar');
if (!$con){
	die('Could not connect: ' . mysql_error());
}
mysql_select_db("elaram_site", $con);  

$sql= "SELECT ServiceId, ServiceName, ServiceURL, ServiceState, ServiceCategory, ServiceMMP, AppDownload, OnlineApp, OnlinePayment, ServiceNEGPURL, Others
FROM GovServices WHERE ServiceState = '" .$q. "' AND LOWER( GovServices.ServiceName ) LIKE LOWER( '%" .$s. "%' ) LIMIT 0 , 30";
 
$result = mysql_query($sql);  
 
$lengths = mysql_num_rows($result); 

echo "<br><br><div class='countmsg'>We found " . $lengths  ." gov services for your query, <b>State:" . $q . "</b></div>";
echo "<div class='mainresult' id='mainresult' style='clear: both;margin-left: 5px;margin-right: 5px;'>";
 
while($row = mysql_fetch_array($result)){ 

	echo "<div class='resultitem' style='border-bottom: 1px dotted #666666;margin-bottom: 25px;' id='result" . $row['ServiceId'] . "'>";

	echo "<h3 class='resultpagetitleh3'> <a style='color:#89B512' target='_blank' href='" . $row['ServiceNEGPURL'] . "' class='' title='" . $row['ServiceName'] . "'>" . $row['ServiceName'] . "</a>";
	echo "</h3>";

	echo "<div class='searchitem_type'> <b>Service Category</b>: " . $row['ServiceCategory'] . " <b>, Service MMP</b>: " . $row['ServiceMMP'] . "</div>";

	echo "<br><div class='searchitem_address'><i class='adr'><span class='street-address'><b>Service Url:</b><a href='" . $row['ServiceURL'] . "'>" . $row['ServiceURL'] . "</a><br><b>Online Application Available?</b> " . $row['OnlineApp'] . "<br><b>Online Payment Available?</b> " . $row['OnlinePayment'] . "<br> <b>Application Downloadable? </b>" . $row['AppDownload'] . "</span></i></div>";		
	
	echo "<div class='searchitem_type'> <b>More Details</b>: <a href='" . $row['ServiceNEGPURL'] . "'>" . $row['ServiceNEGPURL'] . "</a></div>";
	
	echo "</div>"; 
}
echo "</div>";
mysql_close($con);
?>
