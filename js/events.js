//creating a extenstion which can be used to get the URL parameter from URLs.
$.extend({
	getUrlVars: function(){
	var vars = [], hash;
	var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
	for(var i = 0; i < hashes.length; i++){
		hash = hashes[i].split('=');
		vars.push(hash[0]);
	      	vars[hash[0]] = hash[1];
	}
	return vars;
	},
	getUrlVar: function(name){
		return $.getUrlVars()[name];
	}
});

//method to call the php file to get the org details from DB
function getEventDetails(eventId){
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
				document.getElementById("orgcontent").innerHTML="<img align='middle' src='/img/unknownorg.jpg' title='Invalid'><br><br><h2>No Events available during this period</h2>To register an event please mail the event details using our <a href='/contactus.php'>Contact Us</a> page or <a href='http://smile4dreams.org'>Home</a> page<div class='line2'></div>";
			else		
				document.getElementById("orgcontent").innerHTML=xmlhttp.responseText;
    		}
  	}
  	if(eventId != null && eventId != ""){
		xmlhttp.open("GET","geteventdetails.php?eventid="+eventId,true);
  	}else{
		xmlhttp.open("GET","geteventlist.php",true);
  	}

	xmlhttp.send();
}
// Get object of URL parameters
var allVars = $.getUrlVars();
// Getting URL var by its orgid
var eventId = $.getUrlVar('eventid');

//TODO: validation for orgid goes here


//call the method to get the details
getEventDetails(eventId);