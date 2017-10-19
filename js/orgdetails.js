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
function getOrgDetails(orgid){
	if (orgid == null || orgid == ''){ 
  		document.getElementById("orgcontent").innerHTML="<img align='middle' src='/img/unknownorg.jpg' title='Invalid'><br><br><h2>Invalid Organization Id</h2>Please visit our <a href='/opportunities.php'>Find Opportunities</a> page or <a href='http://smile4dreams.org'>Home</a> page<div class='line2'></div>";
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
				document.getElementById("orgcontent").innerHTML="<img align='middle' src='/img/unknownorg.jpg' title='Invalid'><br><br><h2>Invalid Organization Id</h2>Please visit our <a href='/opportunities.php'>Find Opportunities</a> page or <a href='http://smile4dreams.org'>Home</a> page<div class='line2'></div>";
			else		
				document.getElementById("orgcontent").innerHTML=xmlhttp.responseText;
    		}
  	}
	xmlhttp.open("GET","getorgdetails.php?orgid="+orgid,true);
	xmlhttp.send();
}
// Get object of URL parameters
var allVars = $.getUrlVars();
// Getting URL var by its orgid
var orgId = $.getUrlVar('orgid');

//TODO: validation for orgid goes here


//call the method to get the details
getOrgDetails(orgId);