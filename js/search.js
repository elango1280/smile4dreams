//method to call the php file to get the org details from DB
function getSearchResults(){

	var interest = document.getElementById("interest").value;
	var location = document.getElementById("location").value;

	if ((interest == null || interest == '' || interest == 'Interest') && (location == null || location == '' || location == 'Location')){ 
	
		alert("please enter your Interest/Location first");
		return;
  	}
  	else{
		document.searchfrm.submit();
  	} 		
}

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

// Get object of URL parameters
var allVars = $.getUrlVars();
// Getting URL var by its orgid
var orgInt = $.getUrlVar('interest');
var orgLoc = $.getUrlVar('location');
 
$(document).ready(function(){
	var isInt = false; 
	var isLoc = false;
	var opr;

	if(orgInt != null && orgInt != undefined && orgInt != "" && orgInt != "Interest"){
		isInt = true;
	}
	if(orgLoc != null && orgLoc != undefined && orgLoc != ""&& orgLoc != "Location"){
		isLoc = true;
	}
	
	if(isLoc || isInt){
	
		orgInt = orgInt.replace("+"," ");
		orgLoc = orgLoc.replace("+"," ");	

		if(isLoc && isInt){
			document.getElementById("location").value = orgLoc;
			document.getElementById("interest").value = orgInt;
			opr = 0;	
		}else if(isLoc){
			document.getElementById("location").value = orgLoc;		
			opr = 1;
		}else if(isInt){
			document.getElementById("interest").value = orgInt;		 
			opr = 2;
		}else{ 
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
				document.getElementById("resultset").innerHTML="<img align='middle' src='/img/unknownorg.jpg' title='Invalid'><br><br><h2>No results found</h2>Please visit our <a href='/opportunities.php'>Find Opportunities</a> page. If you want add one of your organisation to our site, use our <a href='http://www.smile4dreams.org/resources/nonprofitreg.php'>Non Profit Organization registration</a> page<div class='line2'></div>";
			else		
				document.getElementById("resultset").innerHTML=xmlhttp.responseText;
    			}
  		}
		xmlhttp.open("GET","getsearch.php?opr="+opr+"&int="+orgInt+"&loc="+orgLoc,true); 
		xmlhttp.send();  		
	}	
});