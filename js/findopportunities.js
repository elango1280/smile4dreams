//method to call the php file to get the org details from DB
function getOppDetails(place){
	if (place == null || place == ''){ 
  		document.getElementById("resultset").innerHTML="<img align='middle' src='/img/unknownorg.jpg' title='Invalid'><br><br><h2>Please select an place first!!</h2>Please visit our <a href='/opportunities.php'>Find Opportunities</a> page or <a href='http://smile4dreams.org'>Home</a> page<div class='line2'></div>";
		return;
  	}  	
	if (window.XMLHttpRequest){
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest(); 
	}else{
		// code for IE6, IE5
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  	}
	xmlhttp.onreadystatechange=function(){
		if (xmlhttp.readyState==4 && xmlhttp.status==200){
						
			if(xmlhttp.responseText == "<div class='display:none'></div>")
				document.getElementById("resultset").innerHTML="<img align='middle' src='/img/unknownorg.jpg' title='Invalid'><br><br><h2>Please select an place first!!</h2>Please visit our <a href='/opportunities.php'>Find Opportunities</a> page or <a href='http://smile4dreams.org'>Home</a> page<div class='line2'></div>";
			else		
				document.getElementById("resultset").innerHTML=xmlhttp.responseText;
    		}
  	}
	xmlhttp.open("GET","getopportunities.php?opp="+place,true); 
	xmlhttp.send();
}