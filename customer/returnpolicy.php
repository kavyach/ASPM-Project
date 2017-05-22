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
<link rel="stylesheet" href="css/style1.css">
<link rel="stylesheet" href="css/style4.css">
<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet" type="text/css">

<title> RETURN Policy</title>
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
				<h1 style="margin-top:-150px;margin-left:150px;margin-bottom:20px;font-family: 'Lobster', cursive; color:#00b1b7; font-size:75px;">Online Grocery Store</h1>
			</center>
		</div>

<!--inner end starts-->

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
<br><Br>
	<!-- Provecy policy starts here -->
	<center>
		<div class="bodyFrame">
			<div class="pageHeading">
			RETURN Policy
			</div>
			
			<div class="contentBox">
We endeavour to provide the best quality products every single time you order with us.
<br><br>
We have a "no questions asked return policy" which entitles all our customer to return the product at the time of delivery if they are not satisfied with the quality e.g. broken, leaking, faulty or any defect or freshness of the product.
<br><br>
Good once sold will not be taken back unless the product on arrival is damaged, broken, or faulty. Our quality assurance team checks the quality of all ordered products before they reach you. Products purchased on Reliance Fresh Direct can be returned as per below only if unopened and are in resalable condition.
<br><br>
	<table style="width:80%;">
		<tr>
			<td class="contentBoxHeading">Category</td>
			<td class="contentBoxHeading">Damaged / Near Expiry / Low on Quality</td>
		</tr>
		<tr>
			<td>Bread / Fruits & Vegetable / Eggs</td>
			<td>Call within 1 day of delivery</td>
		</tr>


<tr>
			<td>Dairy Products</td>
			<td>Call within 1 day of delivery</td>
		</tr>
		
		
		<tr>
			<td>Non Food</td>
			<td>Call Within 3 days of delivery</td>
		</tr>
		
		<tr>
			<td>Packaged Food</td>
			<td>Call Within 3 days of delivery</td>
		</tr>
	</table>

 	<br><br>
 	
 	
 	
 	

You can return it to the delivery personnel at time of delivery or you can contact our customer support team and we will do the needful. We request you check all the items at the time of delivery.
<br><br>
We will take the returned product and issue a credit note for the value of the return products which will be credited to your store credit account on the Site. This can be used to pay your subsequent shopping bills.
<br><br>
In case you desire the payment be refunded to you, Please call up our call centre and it shall be refunded to you through the same mode of payment used at the time of purchase via, credit card, debit card, net banking or coupons. The amount will be refunded to you between 3-15 working days depending upon the mode of payment chosen by you. Sometimes banks or financial intermediaries take a longer time to process the refund request. However, if the refund does not happen by the date we advised, you may contact us. We will gladly help you.
<br><br>
<spam class="contentBoxHeading"> We do not make any cash refunds.</spam>
<br>
However, if a product is returned due to a change of mind and your order value goes below our minimum order requirement of ₹499, you will be assessed an additional delivery / packing fee of ₹25.
<br><br>
<spam class="contentBoxHeading">Split Payment:</spam><br>

If more than one mode of payment has been used such as store credit, credit card, debit card or COD and, at the time of placing an order, the final refund amount if less than the original amount, due to deductions, would be credited to first to the external mode of payment like debit card, credit cards or and the balance amount would be credited to the internal mode of payment like store credit
<br><br><spam class="contentBoxHeading">Exchange Policy:</spam><br>


All products listed on our website can be exchanged or returned subject to the following conditions:

Product Condition: A product cannot be exchanged or returned unless it is a defective, broken, faulty, leaking or not of satisfactory quality.

Products should be returned in the original condition you had received them. Please understand that we cannot accept returns under the following instances:
<br><br>

(i) damages due to mishandling of product;
<br>(ii) products with tampered or missing labels; 
<br>(iii) any product that is returned without all original packaging and accessories, including the box, manufacturer's packaging if any, original invoice and all other items originally included with the product(s) delivered.
<br><br>
    Product Accessories / Freebies / Bundles & Combos: All the product accessories available with the product and / or all the freebies associated with the product and / or other products associated as “bundles” or “combos” with the product should also be returned so as to enable us to initiate the exchange or return process.
    Validity Period: An eligible product can be exchanged or returned within 1-3 days from the date of the order depending on the nature of the product as defined above.


			</div>
			
			
		</div>
	</center>
	<!-- END OF POLICY -->
		<br>
<!--main starts-->
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