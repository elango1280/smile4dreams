<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Smile for Dreams</title>
<meta name="description" content="Search Page">
<meta name="keywords" content="smile4dreams, smile for dreams, schools">
<link rel="stylesheet" type="text/css" href="/css/main.css" />
<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
<!-- Internet Explorer HTML5 enabling code: -->
<!--[if IE]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <style type="text/css">
        .clear {
          zoom: 1;
          display: block;
        } 
        </style>
        <![endif]--> 
<div id="fb-root"></div>
<script>(function(d, s, id) { 
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-34339871-1']);
  _gaq.push(['_setDomainName', 'smile4dreams.org']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<script> 
function setOptions(chosen) {
	if (chosen == " ") {
 		selbox.options[selbox.options.length] = new Option('Please select one of the options above first','');
 	}
	if (chosen == "tn") {
		document.getElementById("defaultselect").style.display="none";	
		document.getElementById("kaselect").style.display="none";
		document.getElementById("tnselect").style.display="block";			
	}
	if (chosen == "ka") { 
		document.getElementById("defaultselect").style.display="none";	
		document.getElementById("kaselect").style.display="block";
		document.getElementById("tnselect").style.display="none";		
	}	
}
</script>
<style>
.countmsg{
	margin-bottom: 10px;
	color: #000000 !important;
	font-family: "Cabin",arial,sans-serif;
	font-size: 18px;
	font-weight: normal;
	padding-left: 0;
	padding-top: 3px;
	padding-bottom: 3px;
}
.resultpagetitleh3{
	color: #89B512 !important;
	font-family: 'Cabin',Arial,sans-serif;
    	font-size: 1.1em;
    	font-weight: bold;
    	text-decoration: none;
    	padding-bottom: 5px;
    	margin-bottom: 0;
}
.searchitem_divider {
    border-bottom: 1px dotted #666666;
    padding-bottom: 2px;
    padding-top: 2px;
}
</style>
</head>

<body class="home">
<section id="page">
<!-- Defining the #page section with the section tag -->
<header> <!-- Defining the header section of the page with the appropriate tag -->
	<hgroup>
	    <h4>Smile for Dreams</h4>
	</hgroup>  
	<nav class="clear">
		<ul>
			<li><a class="domains" href="http://www.smile4dreams.org/">Home</a></li>
			<li><a class="dedi" href="/opportunities.php">Find Opportunities</a></li>						
			<li><a class="dedi" href="/resources.htm">Resources</a></li>
			<li><a class="dedi" href="/about.htm">About Us</a></li>															
			<li class="order"><a class="" href="/contactus.php">Contact Us</a></li>
		</ul>
	</nav>  
</header>
<section> 
  <article class="clear">
     <form name="searchfrm" method="get" action="/search.php">
     <h1 style="color:#660000;padding-bottom:5px">Find a Volunteer Opportunity</h1>      
       <table> 
       	  <tbody>
       	     <tr>
       	        <td valign=top> 
       	           <h5 style="color: #999999;font-size: 14px;margin-bottom: 5px;margin-top: 0;">Your Interests:</h5>
       	           <input type="text" tabindex="2" size="28" title="Enter your Inerests here" class="searchkey" onblur="if (this.value == '') {this.value = 'Interest',this.style.color= '#999999';}" onfocus="if(this.value == 'Interest',this.style.color= '#999999') {this.value = '',this.style.color= '#600';}" value="Interest" id="interest" maxlength="100" name="interest" style="height:1.5em"> 
       	           <div class="find_sample_interest" >Example: <a href="/search.php?interest=Oldage&location=Location">Oldage</a>, <a href="/search.php?interest=Disabled&location=Location">Disabled</a>, <br><a href="/search.php?interest=Orphanage&location=Location">Orphanage</a>, etc.</div>
       	        </td>
       	        <td width="100px"></td> 
       	        <td valign=top> 
       	           <h5 style="color: #999999;font-size: 14px;margin-bottom: 5px;margin-top: 0;">Location:</h5>
       	           <input type="text" tabindex="3" size="28" title="Enter the location here" class="searchkey" onblur="if (this.value == '') {this.value = 'Location',this.style.color= '#999999';}" onfocus="if(this.value == 'Location',this.style.color= '#999999') {this.value = '',this.style.color= '#600';}" value="Location" id="location" maxlength="100" name="location" style="height:1.5em">
       	           <div class="find_sample_interest" >Example: <a href="/search.php?interest=Interest&location=Tambaram">Tambaram</a>, <a href="/search.php?interest=Interest&location=Bannerghatta">Bannerghatta</a>, <br><a href="/search.php?interest=Interest&location=600053">600053</a>, etc.</div>
       	        </td>
       	        <td width="100px"></td>       	        
       	        <td valign=center>
       	           <a class="custom_button" style="color: #FFFFFF;height: 30px;" href="#" onClick="getSearchResults();">Find the Opportunities</a>
       	        </td>       	        
       	     </tr>
       	  </tbody>
       </table>     
       </form>
  </article>
  <article class="clear" style="padding:12px"> 
  <div class="content_holder">
  <div class="main_content" style="background-color: white;padding-left: 5px; padding-right: 7px; padding-top: 20px;">
    <div name="resultset" id="resultset"></div>		 
  </div>
  <div class="rhc_content">
     <div class="facebook">
        <div class="title">Stay in touch</div> 
     <div class="fb-like" data-href="http://www.facebook.com/pages/Smile4Dreams/552299574785937" data-send="false" data-width="250" data-show-faces="true" data-font="lucida grande"></div>
     </div>
     <div class="bottom-cut"></div>
          <div class="nonprofit">
     	<div class="title">Coming soon..</div>
     	<div class="desc">1) Liss of Scholarships, pension schemes, farmers and womens benefits offered by state and central government.<br>2) Free School websites development..</div> 
     </div>
     <div class="bottom-cut"></div> 
     
     <div class="nonprofit">
     	<div class="title">Government Services</div>
     	<div class="desc">See the list of government services that are available online.<div style="padding-left:30px;padding-top:10px"><a class="custom_button" href="http://www.smile4dreams.org/resources/gov/services.php">Click Here..</a></div></div> 
     </div>
     <div class="bottom-cut"></div>       
     <div class="nonprofit">
     	<div class="title">Nonprofit Registration</div>
     	<div class="desc">Have your own service project (Non-profit organization)? Learn how you can invite others to join. <div style="padding-left:30px;padding-top:10px"><a class="custom_button" href="/resources/nonprofitreg.php">Submit</a></div></div>
     </div>
     <div class="bottom-cut"></div>  
     <div class="nonprofit">
     	<div class="title">Spread the Word</div>
     	<div class="desc">Spread this by adding our "Smile for Dreams" widgets on your page<div style="padding-left:30px;padding-top:10px"><a class="custom_button" href="/resources/spreadtheword.htm">Spread the Word</a></div></div> 
     </div>
     <div class="bottom-cut"></div>  
     </div>   
  </div>
  </article>

<script type="text/javascript"><!--
google_ad_client = "ca-pub-4458509632536636";
/* Bottom Ad */
google_ad_slot = "4246959770";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
<script type="text/javascript"><!--
google_ad_client = "ca-pub-4458509632536636";
/* Bottom RHC Ad */
google_ad_slot = "9580028063";
google_ad_width = 234;
google_ad_height = 60;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>

  <footer id="footer_main">
     <div class="footer_section">
  	<div class="footer_links" style="width:887px;">
  	   <div class="col1">
              <ul style="list-style: none outside none;font-size: 0.8em;padding-bottom:0px;padding-left:0px;border: 0 none;margin: 0;outline: 0 none;vertical-align: baseline;">
                 <li style="padding-bottom:10px"><a href="/about.htm">About Us</a></li>
                 <li style="padding-bottom:10px"><a href="/pressroom.htm">Press Room</a></li>
                 <li style="padding-bottom:10px"><a href="/ourteam.htm">Our Team</a></li>
                 <li style="padding-bottom:10px"><a href="/partners.htm">Our Partners</a></li>
                 <li style="padding-bottom:10px"><a href="/contactus.php">Contact Smile4Dreams</a></li>
              </ul>
           </div>	
  	   <div class="col2"> 
              <ul style="list-style: none outside none;font-size: 0.8em;padding-bottom:0px;padding-left:0px;border: 0 none;margin: 0;outline: 0 none;vertical-align: baseline;">
                 <li style="padding-bottom:10px"><a href="/resources/nonprofitreg.php">Non profit Registration</a></li>
                 <li style="padding-bottom:10px"><a href="/resources/spreadtheword.htm">Spread the Word</a></li>
                 <li style="padding-bottom:10px"><a href="http://smile4dreams.wordpress.com/">Volunteers Blog</a></li> 
              </ul>
           </div>          
  	   <div class="col3">
              <ul style="list-style: none outside none;font-size: 0.8em;padding-bottom:0px;padding-left:0px;border: 0 none;margin: 0;outline: 0 none;vertical-align: baseline;">
                 <li style="padding-left: 35px;background: url('/img/f_logo.png') no-repeat scroll left top transparent;height:30px;padding-bottom:10px"><a href="/resources/spreadtheword.htm">Help us spread the word</br></a></li>
                 <li style="padding-left: 35px;background: url('/img/twitter-bird-blue-on-white.png') no-repeat scroll left top transparent;height:30px;padding-bottom:10px"><a href="#">twitter</a></li>
                 <li style="padding-left: 35px;background: url('/img/LinkedIn_IN_Icon_25px.png') no-repeat scroll left top transparent;height:30px;padding-bottom:10px"><a href="http://smile4dreams.wordpress.com/">Volunteers Blog</a></li>
              </ul>
           </div>            
  	   <div class="col4"> 
              <ul style="list-style: none outside none;font-size: 0.8em;padding-bottom:0px;padding-left:0px;border: 0 none;margin: 0;outline: 0 none;vertical-align: baseline;">
                 <li style="padding-bottom:10px"><a href="/feedback.php">Give us Feedback</a></li>
                 <li style="padding-bottom:10px"><a href="/joinourteam.php">Join Our Team</a></li>  
                 <li style="padding-bottom:10px"><a href="/faqs.htm">FAQs</a></li>                               
                 <li style="padding-bottom:10px"><a href="/sitemap.htm">Sitemap</a></li> 
              </ul>
           </div>           
  	</div> 
     </div>  
     <div class="legal" style="clear: both;padding-top: 15px;text-align: center;">
	<p class="clear">Copyright &copy; 2012 <a href="http://smile4dreams.org">smile4dreams.org</a>. All rights Reserved!</p>
     </div>
	<script src="/js/jquery-1.6.2.min.js"></script>
  	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>	
	<script src="/js/jquery.colorbox-min.js"></script>
	<script src="/js/jquery.tools.min.js"></script>
	<script src="/js/search.js"></script>	
  </footer>
</section> 
<script>
  $(document).ready(function() {
    $("input#interest").autocomplete({source: ["Ashram", "Charitable organisation", "Charitable Trust", "Child Welfare", "Childcare", "Children's home", "Church", "Destitute", "Disabled", "Educational Trust", "Event", "Library", "Non Profit Organisation", "Oldage", "Orphanage", "School", "Students Home", "Temple", "Trust", "Visual Impared"]}); 
    $("input#location").autocomplete({source: ["Karnataka","KA","Bangalore","Tamil Nadu","TN","Chennai","Pondicherry","PY","Chennai","Halasuru", "Ulsoor", "HSR Layout", "Horamavu", "Kalkere", "Hoskur", "Anekal", "Seshadripuram", "Kodipalya", "JP Nagar", "Nagarbhavi", "Vishwavidyalaya", "Krishnarajapuram", "Kodigehalli", "Hennur Main Road", "Bannerghatta", "Banaswadi", "Basaveshwara Nagar", "Chikkalasandra", "Uttarahalli", "Bapujinagar", "Mysore Road", "Cox Town", "Sonnenahalli", "Kengeri", "Hobli", "Bangalore South Taluk", "Doddanna Nagar", "RT Nagar", "Anagal Pura Village", "Dodda Gubbi", "Navrang Theatre", "Rajaji nagar", "Wilson Garden", "Jawans Colony", "BDA Park", "Double Road", "Indira Nagar", "BTM Layout", "Jaya Nagar", "Tigalara Palya", "Koramangala", "Chikkagubbi Village", "Kalekeri", "Emalur", "M H Colony", "Dinnur", "Shivanji Nagar", "Kammanahali", "Yeshwanthpur", "Pillanna Garden", "Mahadevpura", "KG Halli", "jayanagar", "Arekare Gate,TC Palya", "K R Pura", "Benson Town", "HSR Layout", "Adampakkam", "Thiruvanmiyur", "Sunnambu Kolathur", "Arumbakkam", "Ramapuram", "Pammal", "Maduravoyal", "Anna Nagar", "Poonamalle", "Ambattur", "Medavakkam", "Pooneri", "Kattankulathur", "Adayar", "Santhome", "Teppakulam", "Pallavakkam", "VGP Layout", "West Mambalam", "Parrys", "Broadway", "Kilpauk", "Mylapore", "Tambaram", "Velachery", "Madampakkam", "Villivakkam", "Kundrathur", "Choolai", "Kovilambakkam", "Madhavaram", "Injambakkam", "Kodambakkam", "Cuddalore", "Yelahanka", "Pudukuppam"]}); 
  });
  </script>
</body>
</html>