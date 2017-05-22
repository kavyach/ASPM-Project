<?php
    include "conn.php";
    $login=$_GET['login'];
    $uid=$_GET['uid'];
    $fname = $_GET['fname'];
    $lname = $_GET['lname'];
?>
<html>
<head>
<script src="js/jquery.js"></script>
<script>
var clicked=true;
function searchbox() {
    
    if(clicked)
    {
        clicked=false;
        document.getElementById("searchdiv").style.top = '0';
        document.getElementById("searchdiv").style.zIndex = '1';
        document.getElementById("container").style.WebkitTransition = "all 1s";
        document.getElementById("container").style.transition = "all 1s";
        document.getElementById("container").style.height = '80px';
        
    }
    else
    {
        clicked=true;
        document.getElementById("searchdiv").style.WebkitTransition = "all 1s";
        document.getElementById("searchdiv").style.transition = "all 1s";
        document.getElementById("searchdiv").style.top = '-20px';
        document.getElementById("searchdiv").style.zIndex = '-1';
        document.getElementById("container").style.height = '30px';
    }
    
}
</script>
<link rel="stylesheet" href="css/style1.css">
<link rel="stylesheet" href="css/style4.css">
<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet" type="text/css">


<title> Privacy Policy</title>
</head>
<body>
<!--main div starts-->

	<div id="main">
		<div id="main1">
<!--inner div starts-->
			<div id="innermain">
				<img src="images/companylogo.png" width="100" height="80" style="position:relative; margin-left:10px;margin-top:15px">
<p style="float:right;margin-top:40px;margin-right:30px;font-weight:bold">
Welcome
<?php
    
    if($_GET['login']=='yes')
    {
        echo "$fname $lname! <br><img src='images/guest.png' width='20px' height='20px' style='float:right'><br>";
        echo "<a href='logout.php' style='float:right'>LOGOUT</a>";
    }
    else
    {
        echo "Guest!<br> <img src='images/guest.png' width='20px' height='20px' style='float:right'>";
    }
    
    ?>

</p>

			</div>
			<center>
				<h1 style="margin-top:-150px;margin-left:150px; margin-bottom:20px;font-family: 'Lobster', cursive; color:#00b1b7; font-size:75px;">Online Grocery Store</h1>
			</center>
		</div>

<!--inner end starts-->
<div id="container">
		<div id="nav">
			<ul>
			<center>

<?php
    
    if($_GET['login']=='yes')
    {
        
        echo "<li><a href='index.php?login=yes&uid=$uid&fname=$fname&lname=$lname'>Home</a></li>";
    }
    else
    {
        echo "<li><a href='index.php?login=no&uid=$uid'>Home</a></li>";
    }
    ?>
<li><a href="#" onclick="searchbox();">Search</a></li>
<li><a href="register.php">Register</a></li>
<li><a href="login.php">Login</a></li>

<?php
    
    if($_GET['login']=='yes')
    {
        
        echo "<li><a href='mycart.php?login=yes&uid=$uid&fname=$fname&lname=$lname'>MyCart</a></li>";
    }
    else
    {
        echo "<li><a href='mycart.php?login=no&uid=$uid'>MyCart</a></li>";
    }
    
    ?>

			</center>
            </ul>
		</div>

<div id="searchdiv">
<center>
<?php
    if($login=='yes')
    {
        echo "<form id='searchform' method='post' action='search.php?login=yes&uid=$uid&fname=$fname&lname=$lname'>";
    }
    else
    {
        echo "<form id='searchform' method='post' action='search.php?login=no&uid=$uid'>";
    }
    ?>
<input class="formbox" type="text" placeholder="Enter the Name of the Product" name="searchword" id="searchword">
<select id="searchstore" name="searchstore">
<option selected>Select Store..</option>
<option>Willys</option>
<option>ICA</option>
</select>
<input class="myButton3" type="submit" value="Search" name="searchsubmit" id="searchsubmit">
</form>
</center>
</div>
</div>

		<hr>
		<img src="images/background.jpg" width="100%" height="400px">
		
		<div id="left">
			<br>
			<center>
				<ul>
<li style="color:black;font-weight:bold;font-family: 'Lobster', cursive;">SELECT STORE </li>
<li style="background-color:#B2E7E9">
<?php
    
    if($_GET['login']=='yes')
    {
        echo "<a href='willys.php?login=yes&uid=$uid&fname=$fname&lname=$lname'>Willys</a>";
    }
    else
    {
        echo "<a href='willys.php?login=no&uid=$uid'>Willys</a>";
    }
    
    ?>

</li>

<li>
<?php
    
    if($_GET['login']=='yes')
    {
        echo "<a href='ica.php?login=yes&uid=$uid&fname=$fname&lname=$lname'>ICA</a>";
    }
    else
    {
        echo "<a href='ica.php?login=no&uid=$uid'>ICA</a>";
    }
    
    ?>
</li>
<li style="background-color:#B2E7E9"><a href="">CityGross</a></li>
<li><a href="">Coop</a></li>
<li style="background-color:#B2E7E9"><a href="">Hemköp</a></li>
				</ul>
			<center>
		</div>
		<br>
	</div>
<div id="right"> </div>
<br>
<br>
	<!-- Privacy policy starts here -->
	<center>
		<div class="bodyFrame">
			<div class="pageHeading">
			PRIVACY Policy
			</div>
			<div class="contentBox">
			<span class="contentBoxHeading">Personal Information</span> GRoup 12 Pvt Ltd is the licensed owner of the brand group12shop.com and the website group12shop.com (”The Site”) from Supermarket Grocery Supplies Pvt Ltd (“SGSPL”). IRCPL respects your privacy. This Privacy Policy provides succinctly the manner your data is collected and used by IRCPL on the Site. As a visitor to the Site/ Customer you are advised to please read the Privacy Policy carefully. By accessing the services provided by the Site you agree to the collection and use of your data by IRCPL in the manner provided in this Privacy Policy.
			</div>

			<div class="contentBox">
			<span class="contentBoxHeading">What information is, or may be, collected form you?</span>  As part of the registration process on the Site, IRCPL may collect the following personally identifiable information about you: Name including first and last name, alternate email address, mobile phone number and contact details, Postal code, Demographic profile (like your age, gender, occupation, education, address etc.) and information about the pages on the site you visit/access, the links you click on the site, the number of times you access the page and any such browsing information. 
			</div>

<div class="contentBox">
			<span class="contentBoxHeading">How do we Collect the Information ?</span> IRCPL will collect personally identifiable information about you only as part of a voluntary registration process, on-line survey or any combination thereof. The Site may contain links to other Web sites. IRCPL is not responsible for the privacy practices of such Web sites which it does not own, manage or control. The Site and third-party vendors, including Google, use first-party cookies (such as the Google Analytics cookie) and third-party cookies (such as the DoubleClick cookie) together to inform, optimize, and serve ads based on someone's past visits to the Site.  
			</div>
			
			
			
			<div class="contentBox">
			<span class="contentBoxHeading">How is information used ?</span> IRCPL will use your personal information to provide personalized features to you on the Site and to provide for promotional offers to you through the Site and other channels. IRCPL will also provide this information to its business associates and partners to get in touch with you when necessary to provide the services requested by you. IRCPL will use this information to preserve transaction history as governed by existing law or policy. IRCPL may also use contact information internally to direct its efforts for product improvement, to contact you as a survey respondent, to notify you if you win any contest; and to send you promotional materials from its contest sponsors or advertisers. IRCPL will also use this information to serve various promotional and advertising materials to you via display advertisements through the Google Ad network on third party websites. You can opt out of Google Analytics for Display Advertising and customize Google Display network ads using the Ads Preferences Manager. Information about Customers on an aggregate (exlcuding any information that may identify you specifically) covering Customer transaction data and Customer demographic and location data may be provided to partners of IRCPL for the purpose of creating additional features on the website, creating appropriate merchandising or creating new products and services and conducting marketing research and statistical analysis of customer behaviour and transactions. 
			</div>
			
			
			<div class="contentBox">
			<span class="contentBoxHeading">With whom your information will be shared </span>IRCPL will not use your financial information for any purpose other than to complete a transaction with you. IRCPL does not rent, sell or share your personal information and will not disclose any of your personally identifiable information to third parties. In cases where it has your permission to provide products or services you've requested and such information is necessary to provide these products or services the information may be shared with IRCPL’s business associates and partners. IRCPL may, however, share consumer information on an aggregate with its partners or thrird parties where it deems necessary. In addition IRCPL may use this information for promotional offers, to help investigate, prevent or take action regarding unlawful and illegal activities, suspected fraud, potential threat to the safety or security of any person, violations of the Site’s terms of use or to defend against legal claims; special circumstances such as compliance with subpoenas, court orders, requests/order from legal authorities or law enforcement agencies requiring such disclosure. 
			</div>
			
			
			
			
			<div class="contentBox">
			<span class="contentBoxHeading">What Choice are available to you regarding collection, use and distribution of your information ?</span> To protect against the loss, misuse and alteration of the information under its control, IRCPL has in place appropriate physical, electronic and managerial procedures. For example, IRCPL servers are accessible only to authorized personnel and your information is shared with employees and authorised personnel on a need to know basis to complete the transaction and to provide the services requested by you. Although IRCPL will endeavour to safeguard the confidentiality of your personally identifiable information, transmissions made by means of the Internet cannot be made absolutely secure. By using this site, you agree that IRCPL will have no liability for disclosure of your information due to errors in transmission or unauthorized acts of third parties.   
			</div>
			
			
			<div class="contentBox">
			<span class="contentBoxHeading">How can you correct inaccuracies in the information ?</span> To correct or update any information you have provided, the Site allows you to do it online. In the event of loss of access details you can send an e-mail to: xxxxxxxxxxxx  
			</div>
			
			<div class="contentBox">
			<span class="contentBoxHeading">Policy updates </span> IRCPL reserves the right to change or update this policy at any time. Such changes shall be effective immediately upon posting to the Site. 
			</div>
			<div class="contentBox">
			<span class="contentBoxHeading">Contact Information </span> <br>Group 12 Pvt Ltd,<br>
				Tromtögatan 10,<br>
                Karlskrona-37137 SWEDEN<br>
				Tel.: +91 80 3355 1000<br>
				Email id: customerservice@group12shop.com  <br>
			</div>
			
			
		</div>
	</center>
	<!-- END OF POLICY -->
		<br>

	<!-- footer-->
		<div id="footer">
			<ul>
			<center>
				<Br>
				<br>
<li>
<?php
    
    if($_GET['login']=='yes')
    {
        
        echo "<a href='privacy.php?login=yes&uid=$uid&fname=$fname&lname=$lname'>Privacy Policy</a>";
    }
    else
    {
        echo "<a href='privacy.php?login=no&uid=$uid'>Privacy Policy</a>";
    }
    
    ?>

</li>
<li>

<?php
    
    if($_GET['login']=='yes')
    {
        
        echo "<a href='privacy.php?login=yes&uid=$uid&fname=$fname&lname=$lname'>Return Policy</a>";
    }
    else
    {
        echo "<a href='privacy.php?login=no&uid=$uid'>Return Policy</a>";
    }
    
    ?>
</li>
<li>
<?php
    
    if($_GET['login']=='yes')
    {
        
        echo "<a href='contact.php?login=yes&uid=$uid&fname=$fname&lname=$lname'>Contact Us</a>";
    }
    else
    {
        echo "<a href='contact.php?login=no&uid=$uid'>Contact Us</a>";
    }
    
    ?>

</li>
				</ul>
			</center>
			<br>
			<center>
				<span style="color:white;align:center"> &copy; 2015 Group12Shop </span>
		
				
			</center>
		</div>

<!--footer end-->

</body>

</html>