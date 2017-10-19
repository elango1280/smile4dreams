<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Smile for Dreams</title>
<meta name="description" content="Opportunities Page">
<meta name="keywords" content="orphanage list, orphanage">
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
		document.getElementById("pyselect").style.display="none";					
	}
	if (chosen == "ka") { 
		document.getElementById("defaultselect").style.display="none";	
		document.getElementById("kaselect").style.display="block";
		document.getElementById("tnselect").style.display="none";
		document.getElementById("pyselect").style.display="none";				
	}
	if (chosen == "py") { 
		document.getElementById("defaultselect").style.display="none";	
		document.getElementById("kaselect").style.display="none";
		document.getElementById("tnselect").style.display="none";		
		document.getElementById("pyselect").style.display="block";		
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
			<li><a class="dedi" style="background-color: #333333;color: #FFFFFF;text-decoration: none;" href="/opportunities.php">Find Opportunities</a></li>						
			<li><a class="dedi" href="/resources.htm">Resources</a></li>
			<li><a class="dedi" href="/about.htm">About Us</a></li>															
			<li class="order"><a class="" href="/contactus.php">Contact Us</a></li>
		</ul>
	</nav>  
</header>
<section> 
  <article class="clear" style="padding:12px"> 
  <div class="content_holder">
  <div class="main_content">
       <h1 style="color:#660000;padding-bottom:5px">Find Opportunity by location</h1>
       <form name="oppform">
       <table>
       	  <tbody> 
       	     <tr>
       	        <td valign=top>
       	           <h5 style="color: #999999;font-size: 14px;margin-bottom: 5px;margin-top: 0;">Select the State:</h5>
       	           <select name="optcity" size="1" width="250" style="width:250px" onchange="setOptions(document.oppform.optcity.options[document.oppform.optcity.selectedIndex].value);">
			<option value=" " selected="selected">Please select the State</option>       	           
			<option value="ka">Karnataka</option> 
			<option value="tn">Tamil Nadu</option>
			<option value="py">Pondy Cherry</option>
		   </select>
       	        </td>
       	        <td width="100px"></td>
       	        <td valign=top> 
       	           <h5 style="color: #999999;font-size: 14px;margin-bottom: 5px;margin-top: 0;">Select the place:</h5>
       	           <select name="optplace" id="defaultselect" size="1" width="250" style="width:250px" onchange="getOppDetails(document.oppform.optplace.options[document.oppform.optplace.selectedIndex].value);">
			<option value="" selected="selected">Please select one of the State first</option>
		   </select>		   
		   <select name="opttnplace" id="tnselect" size="1" width="250" style="width:250px;display:none" onchange="getOppDetails(document.oppform.opttnplace.options[document.oppform.opttnplace.selectedIndex].value);">
			<option value="" selected="selected">Please select the place</option>
			<optgroup label="Chennai">
				<option value="Adampakkam">Adampakkam</option>
				<option value="Adayar">Adayar</option>
				<option value="Ambattur">Ambattur</option>
				<option value="Anna Nagar">Anna Nagar</option>
				<option value="Arumbakkam">Arumbakkam</option>
				<option value="Broadway">Broadway</option>
				<option value="Choolai">Choolai</option>
				<option value="Injambakkam">Injambakkam</option>
				<option value="Kattankulathur">Kattankulathur</option>
				<option value="Kilpauk">Kilpauk</option>
				<option value="Kodambakkam">Kodambakkam</option>
				<option value="Kovilambakkam">Kovilambakkam</option>
				<option value="Kundrathur">Kundrathur</option>
				<option value="Madampakkam">Madampakkam</option>
				<option value="Madhavaram">Madhavaram</option>
				<option value="Maduravoyal">Maduravoyal</option>
				<option value="Medavakkam">Medavakkam</option>
				<option value="Mylapore">Mylapore</option>
				<option value="Pallavakkam">Pallavakkam</option>
				<option value="Pammal">Pammal</option>
				<option value="Parrys">Parrys</option>
				<option value="Poonamalle">Poonamalle</option>
				<option value="Pooneri">Pooneri</option>
				<option value="Ramapuram">Ramapuram</option>
				<option value="Santhome">Santhome</option>
				<option value="Sunnambu Kolathur">Sunnambu Kolathur</option>
				<option value="Tambaram">Tambaram</option>
				<option value="Teppakulam">Teppakulam</option>
				<option value="Thiruvanmiyur">Thiruvanmiyur</option>
				<option value="Velachery">Velachery</option>
				<option value="Villivakkam">Villivakkam</option>
				<option value="VGP Layout">VGP Layout</option>
				<option value="West Mambalam">West Mambalam</option>								
			</optgroup>
			<optgroup label="Cuddalore District">
				<option value="Cuddalore">Cuddalore</option>
				<option value="Pudukuppam">Pudukuppam</option>
			</optgroup>	
		   </select>		   
		   
		   <select name="optkaplace" id="kaselect" size="1" width="250" style="width:250px;display:none" onchange="getOppDetails(document.oppform.optkaplace.options[document.oppform.optkaplace.selectedIndex].value);">
			<option value="" selected="selected">Please select the place</option>
			<optgroup label="Bangalore">
				<option value="Anagal Pura Village">Anagal Pura Village</option>
				<option value="Anekal">Anekal</option>
				<option value="Arekare Gate">Arekare Gate</option>
				<option value="Banaswadi">Banaswadi</option>
				<option value="Bangalore South Taluk">Bangalore South Taluk</option>
				<option value="Bannerghatta">Bannerghatta</option>
				<option value="Bapujinagar">Bapujinagar</option>
				<option value="Basaveshwara Nagar">Basaveshwara Nagar</option>
				<option value="BDA Park">BDA Park</option>
				<option value="Benson Town">Benson Town</option>
				<option value="BTM Layout">BTM Layout</option>
				<option value="Chikkagubbi Village">Chikkagubbi Village</option>
				<option value="Chikkalasandra">Chikkalasandra</option>
				<option value="Cox Town">Cox Town</option>
				<option value="Dodda Gubbi">Dodda Gubbi</option>
				<option value="Doddanna Nagar">Doddanna Nagar</option>
				<option value="Double Road">Double Road</option>
				<option value="Dinnur">Dinnur</option>
				<option value="Emalur">Emalur</option>
				<option value="Halasuru">Halasuru</option>
				<option value="Hennur Main Road">Hennur Main Road</option>
				<option value="Hobli">Hobli</option>
				<option value="Horamavu">Horamavu</option>
				<option value="Hoskur">Hoskur</option>
				<option value="HSR Layout">HSR Layout</option>
				<option value="Indira Nagar">Indira Nagar</option>
				<option value="Jaya Nagar">Jaya Nagar</option>
				<option value="Jawans Colony">Jawans Colony</option>
				<option value="JP Nagar">JP Nagar</option>
				<option value="K R Pura">K R Pura</option>
				<option value="Kalekeri">Kalekeri</option>
				<option value="Kalkere">Kalkere</option>
				<option value="Kammanahali">Kammanahali</option>
				<option value="Kengeri">Kengeri</option>
				<option value="KG Halli">KG Halli</option>
				<option value="Kodigehalli">Kodigehalli</option>
				<option value="Kodipalya">Kodipalya</option>
				<option value="Koramangala">Koramangala</option>
				<option value="Krishnarajapuram">Krishnarajapuram</option>
				<option value="M H Colony">M H Colony</option>
				<option value="Mahadevpura">Mahadevpura</option>
				<option value="Mysore Road">Mysore Road</option>
				<option value="Nagarbhavi">Nagarbhavi</option>
				<option value="Navrang Theatre">Navrang Theatre</option>
				<option value="Pillanna Garden">Pillanna Garden</option>
				<option value="Rajaji nagar">Rajaji nagar</option>
				<option value="RT Nagar">RT Nagar</option>
				<option value="Seshadripuram">Seshadripuram</option>
				<option value="Shivanji Nagar">Shivanji Nagar</option>
				<option value="Sonnenahalli">Sonnenahalli</option>
				<option value="TC Palya">TC Palya</option>
				<option value="Tigalara Palya">Tigalara Palya</option>
				<option value="Ulsoor">Ulsoor</option>
				<option value="Uttarahalli">Uttarahalli</option>
				<option value="Vishwavidyalaya">Vishwavidyalaya</option>
				<option value="Wilson Garden">Wilson Garden</option>
				<option value="Yelahanka">Yelahanka</option>
				<option value="Yeshwanthpur">Yeshwanthpur</option>									
			</optgroup>
		   </select>
		   
		   <select name="optpyplace" id="pyselect" size="1" width="250" style="width:250px;display:none" onchange="getOppDetails(document.oppform.optpyplace.options[document.oppform.optpyplace.selectedIndex].value);">
			<option value="" selected="selected">Please select the place</option>
			<optgroup label="Pondy Cherry">
				<option value="Ariyankuppam">Ariyankuppam</option>
				<option value="Mettupalayam">Mettupalayam</option>
				<option value="Thattanchavady">Thattanchavady</option>
				<option value="Pondicherry">Other Places</option>
			</optgroup>
		   </select>
		   
       	        </td>       	        
       	     </tr>
       	  </tbody>
       </table>  
       <p>The city/place your are looking for is not listed above, help us in adding to our database. <a style="color: #660000;outline: medium none;text-decoration: underline;" href="/contactus.php">Contact Us</a> for more details.</p> 
       </form>     
    <div class="line2"></div> 
    <div name="resultset" id="resultset" style="background-color: white;"></div>		
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
	 <script src="/js/findopportunities.js"></script>
  </footer>   
</section>
<script>
  $(document).ready(function() { 
    $("input#interest").autocomplete({source: ["Orphanage", "Oldage", "Education", "Schools", "Temples", "Disabled", "Library", "Health & Medicine", "Community", "Non-Reg Org", "Events"]}); 
    $("input#location").autocomplete({source: ["Karnataka","KA","Bangalore","Tamil Nadu","TN","Chennai","Pondicherry","PY","Ariyalur","Chennai","Coimbatore","Cuddalore","Dharmapuri","Dindigul","Erode","Kanchipuram","Kanyakumari","Nagercoil","Karur","Krishnagiri","Madurai","Nagapattinam","Namakkal","Nilgiris","Udagamandalam","Perambalur","Pudukkottai","Ramanathapuram","Salem","Sivaganga","Thanjavur","Theni","Thoothukudi","Tiruchirappalli","Tirunelveli","Tirupur","Tiruvallur","Tiruvannamalai","Tiruvarur","Vellore","Viluppuram","Virudhunagar"
]});
  });
  </script>
</body>
</html>