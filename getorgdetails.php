<?php
$q=$_GET["orgid"];
$con = mysql_connect('localhost', 'elaram_site', 'espnstar');
if (!$con){
	die('Could not connect: ' . mysql_error());
}
mysql_select_db("elaram_site", $con);

$sql= "SELECT OrgTitle, OrgWebSite, OrgName, OrgPhotoLocation, OrgShortDesc, OrgFullDesc, OrgContact, OrgPhoneNumber, OrgEmail, OrgAddress, OrgLocation, OrgCity, OrgZipCode, OrgRequirements, OrgSkills, OrgSuitableFor, OrgType, OrgId, OrgCoordinates, OrgVolunteerContact, OrgGoogleMapLoc, OrgDatePosted, OrgSearchLocation, OrgSearchWords, OrgAdditional1 FROM  Organization WHERE OrgId = '".$q."'";

$result = mysql_query($sql);

$lengths = mysql_fetch_lengths($result);
 
echo "<div class='display:none'>" . $lengths  ."</div>"; 	

while($row = mysql_fetch_array($result)){

	echo "<meta name='description' content='" . $row['OrgTitle'] . "'>";
	echo "<meta name='keywords' content='orphanage," . $row['OrgName'] . "," . $row['OrgLocation'] . "'>";

	echo "<div id='org_title_area'><h1>" . $row['OrgTitle'] . "</h1><div class='clear'></div></div>";	
	echo "<div id='orginfo'><h2 class='org_detail_org_name'><a href='" . $row['OrgWebSite'] . "'>". $row['OrgName'] . "</a></h2></div>";
	
	echo "<div class='description'>";
	echo "<div style='float:right; width:284px;'><div class='image_frame'><img src='" . $row['OrgPhotoLocation'] . "' alt='". $row['OrgName'] . "' style='height: 250px;width: 270px;' title='" . $row['OrgName'] . "' ><span></span></div><br clear='all'></div>";	
		
	echo "<div id='shortened'><div id='short_desc'>" . $row['OrgShortDesc'] . "<p><a class='read_more' onclick='toggleDivs('shortened','full_desc'); return false;' href='#'>Read More</a></p></div>";		
	  
	echo "<div id='full_desc' style='display:none'>" . $row['OrgFullDesc'] . "</div>";
	echo "</div><div class='clear'></div>"; 

	echo "<div class='fblike'><p><iframe src='http://www.facebook.com/plugins/like.php?href=http://www.smile4dreams.org/orgdetails.php?orgid=".$q."'
        scrolling='no' frameborder='0' style='border:none; width:450px; height:30px'></iframe></p></div>";

	echo "<div class='contact'><p>Contact details:<br>";	
	echo "<b>Contact Name: </b>" . $row['OrgContact'] . "<br> <b>Phone Number: </b>" . $row['OrgPhoneNumber'] . "<br> <b>Email Address: </b><a href='mailto:" . $row['OrgEmail'] . "?Subject=Hello!!'> " . $row['OrgEmail'] . "</a><br> <b>Website: </b><a href='" . $row['OrgWebSite'] . "'> ". $row['OrgWebSite'] . "</a></p></div>";
	 
	echo "<div class='org_details'>";
	echo "<h2>Details</h2><div class='map'><iframe width='270' height='250' frameborder='0' scrolling='no' marginheight='0' marginwidth='0' src='" . $row['OrgGoogleMapLoc'] . "output=embed'></iframe><br /><small><a href='" . $row['OrgGoogleMapLoc'] . "source=embed' target='_blank' style='color:#0000FF;text-align:left'>View Larger Map</a></small></div>";
		
	$googledirectionurl = str_replace("<br>", "",$row['OrgAddress']); 	
	echo "<ul>"; 
	echo "<li><span class='detail_category'>Where</span><address id='address' class='adr'><span class='street-address'>" . $row['OrgAddress'] . "</span><br><a class='read_more' target='_blank' href='http://maps.google.com/maps?h1=en&saddr=&daddr=".$row['OrgCoordinates']."'>Get Directions</a></address></li>";

	echo "<li><span class='detail_category'>Locality</span>" . $row['OrgLocation'] . " (" . $row['OrgCity'] . "-" . $row['OrgZipCode'] . ")</li>";
	
	echo "<li><span class='detail_category'>Requirements</span>" . $row['OrgRequirements'] . "</li>";
	//echo "<li><span class='detail_category'>Skills</span>" . $row['OrgSkills'] . "</li>";
	echo "<li><span class='detail_category'>Suitable for</span>" . $row['OrgSuitableFor'] . "</li>";
	echo "<li class='last'><span class='detail_category'>Volunteer Contact</span>";
	
	if ($row['OrgVolunteerContact'] == "NA"){
		echo "<ul><li>Organization does not have an Volunteer Contact, want to become the contact for this org, use our<a href='http://smile4dreams.org/contactus.php?orgid=" . $row['OrgId'] . "'> Contact Us page</a>.</li></ul></li>";
	}else{
		echo "<ul><li>" . $row['OrgVolunteerContact'] . "</li></ul></li>"; 
	}	 
	echo "</ul>"; 
	echo "</div>";
	
	echo "<div ='disclaimer' style='padding-bottom:10px'>";
	echo "<b style='color: #3497B4 !important;'>Note: </b>If the above information is incorrect, please help us in updating it. Use our <a href='http://smile4dreams.org/feedback.php'>Feedback Form</a> to contact us. <br><br> "; 
	echo "<b style='color: #3497B4 !important;'>Disclaimer: </b>If your are the owner of the above organisation and if you have any concerns with the content, use our <a href='http://smile4dreams.org/feedback.php'>Feedback Form</a> to contact us."; 
	echo "</div>";
	
}
mysql_close($con);
?>
